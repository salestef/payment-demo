<?php

namespace App\Controller;

use App\DTO\InvoiceDTO;
use App\Enum\InvoiceStatusEnum;
use App\Exception\PaymentProviderException;
use App\Repository\InvoiceRepository;
use App\Service\Payment\Invoice\InvoiceFactory;
use App\Service\Payment\Invoice\CreateInvoiceAction;
use App\Service\Payment\SignatureService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\MapRequestPayload;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class InvoiceController extends AbstractController
{
    public function __construct(
        protected readonly SignatureService $signatureService,
    )
    {
    }

    #[Route('/', name: 'payment_form')]
    public function showPaymentForm(): Response
    {
        return $this->render('payment/form.html.twig');
    }

    #[Route('/invoice', name: 'handle_invoice', methods: ['POST'])]
    public function handleInvoice(
        #[MapRequestPayload] InvoiceDTO $DTO,
        ValidatorInterface              $validator,
        InvoiceFactory                  $invoiceFactory,
        EntityManagerInterface          $entityManager,
        CreateInvoiceAction             $action
    ): Response
    {
        $errors = $validator->validate($DTO);
        if (count($errors) > 0) {
            return $this->json(['errors' => (string)$errors], Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $invoice = $invoiceFactory->make($DTO);

            $pspResponse = $action->execute($invoice);
            $pspResponse->initMock($invoice);

            $responseMock = $pspResponse->mock();

            if ($pspResponse->getStatusCode() !== 201) {

                throw new PaymentProviderException(
                    $responseMock['error'] ?? 'Payment provider error',
                    $responseMock,
                    Response::HTTP_PAYMENT_REQUIRED
                );
            }

            $invoice
                ->setStatus(InvoiceStatusEnum::STATUS_PENDING)
                ->setResponseData(json_encode($responseMock))
                ->setQrCode($responseMock['payment_info']['metadata']['qr_code'] ?? null);

            $entityManager->flush();

            if (isset($responseMock['redirect_url'])) {
                return $this->redirect($responseMock['redirect_url']);
            }

            return $this->render('payment/success.html.twig', [
                'payment_info' => $responseMock['payment_info'],
                'invoice' => $invoice,
            ]);

        } catch (PaymentProviderException $e) {
            return $this->json([
                'error' => $e->getMessage(),
                'details' => $e->getResponseDetails(),
            ], $e->getCode());

        } catch (\Exception $e) {
            return $this->json([
                'error' => 'Unexpected error occurred',
                'message' => $e->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
