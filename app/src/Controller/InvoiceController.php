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
                ->setStatus(InvoiceStatusEnum::STATUS_PENDING->value)
                ->setResponseData(json_encode($responseMock));

            $entityManager->flush();

            if (isset($responseMock['redirect_url'])) {
                return $this->redirect($responseMock['redirect_url']);
            }

            return $this->render('payment/success.html.twig', [
                'payment_info' => $responseMock['payment_info'],
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


    #[Route('/invoice/signature/{id}', name: 'invoice_signature', methods: ['GET'])]
    public function getInvoiceSignature(int $id, InvoiceRepository $invoiceRepository): JsonResponse
    {
        $invoice = $invoiceRepository->find($id);

//        $nest = ["merchant_order_id"=>$invoice->getId(),"amount"=>strval($invoice->getAmount()),"currency"=>"USD","status"=>$invoice->getStatus(),"timestamp" =>1726671599];

        $nest = ["merchant_order_id" => "{$invoice->getId()}", "amount" => "{$invoice->getAmount()}", "currency" => "USD", "status" => InvoiceStatusEnum::STATUS_SUCCESSFUL->value, "timestamp" => 1726671599];
//        $jsonEncodedData = json_encode($rawData, JSON_UNESCAPED_SLASHES | JSON_THROW_ON_ERROR);

        $signature = $this->signatureService->sign($nest);
        return new JsonResponse(['signature' => $signature], 200);
    }
}
