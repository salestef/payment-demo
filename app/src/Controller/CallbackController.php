<?php

namespace App\Controller;

use App\DTO\CallbackDTO;
use App\Enum\InvoiceStatusEnum;
use App\Exception\PaymentProviderException;
use App\Repository\InvoiceRepository;
use App\Service\Payment\Callback\CallbackAction;
use App\Service\Payment\SignatureService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\MapRequestPayload;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class CallbackController extends AbstractController
{
    public function __construct(
        private readonly SignatureService $signatureService,
    )
    {
    }

    #[Route('/callback', name: 'handle_callback', methods: ['POST'])]
    public function handleCallback(
        Request                          $request,
        #[MapRequestPayload] CallbackDTO $DTO,
        ValidatorInterface               $validator,
        CallbackAction                   $action,
    ): JsonResponse
    {
        $errors = $validator->validate($DTO);

        if (count($errors) > 0) {
            return $this->json(['errors' => (string)$errors], Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {

            $receivedSignature = $request->headers->get('X-signature');

            $calculatedSignature = $this->signatureService->sign($request->toArray());

            if ($receivedSignature !== $calculatedSignature) {
                throw new PaymentProviderException('Invalid signature', ['Signature' => $receivedSignature], 400);
            }

            $DTO
                ->setSignature($receivedSignature)
                ->setRawData($request->getContent());

            $callback = $action->execute($DTO);

            if ($callback->getStatus() === InvoiceStatusEnum::STATUS_ERROR->value) {
                throw new PaymentProviderException(sprintf('Callback failed for invoice id [%s] with error status.', $DTO->getMerchantOrderId()), ['merchant_order_id' => $DTO->getMerchantOrderId()], 400);
            }

            return new JsonResponse(['message' => 'Callback processed successfully'], 200);

        } catch (PaymentProviderException $e) {
            return $this->json([
                'error' => $e->getMessage(),
                'details' => $e->getResponseDetails(),
            ], $e->getCode());

        } catch (\Exception $e) {
            return $this->json([
                'error' => 'Unexpected error occurred',
                'message' => $e->getMessage(),
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    // TODO This route is used for TEST purposes only to generate CURL Callback request for specific Invoice and make testing easier.
    // TODO Copy curl request and run it inside PHP Docker container to simulate Callback request from Payment Provider.
    #[Route('/callback/generate-curl/invoice/{id}', name: 'callback_generate_curl', methods: ['GET'])]
    public function getInvoiceSignature(int $id, InvoiceRepository $invoiceRepository): JsonResponse
    {
        $invoice = $invoiceRepository->find($id);

        if (!$invoice) {
            return new JsonResponse(['error' => 'Invoice not found'], 404);
        }

        $data = [
            'merchant_order_id' => (string)$invoice->getId(),
            'amount' => (string)$invoice->getAmount(),
            'currency' => 'USD',
            'status' => InvoiceStatusEnum::STATUS_SUCCESSFUL->value,
            'timestamp' => time()
        ];

        $signature = $this->signatureService->sign($data);

        $jsonData = json_encode($data, JSON_UNESCAPED_SLASHES | JSON_THROW_ON_ERROR);

        $curlCommand = sprintf(
            "curl -H 'Content-Type: application/json' -H 'X-signature: %s' -d '%s' 'http://nginx/callback'",
            $signature,
            $jsonData
        );

        return new JsonResponse([
            'signature' => $signature,
            'curl_command' => $curlCommand
        ], 200);
    }
}
