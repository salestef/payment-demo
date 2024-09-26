<?php

namespace App\Controller;

use App\Entity\Invoice;
use App\Entity\Callback;
use App\Repository\InvoiceRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CallbackController extends AbstractController
{
    public function __construct(
        protected readonly InvoiceRepository $invoiceRepository,
    )
    {
    }

    #[Route('/callback', name: 'handle_callback', methods: ['POST'])]
    public function handleCallback(Request $request, EntityManagerInterface $em): JsonResponse
    {
        $rawData = $request->getContent();
        $receivedSignature = $request->headers->get('X-signature');
        $secretKey = 'SOME_SECRET_KEY';

        // Verifikacija potpisa
        $calculatedSignature = base64_encode(hash_hmac('sha256', $rawData, $secretKey));
        if ($receivedSignature !== $calculatedSignature) {
            return new JsonResponse(['error' => 'Invalid signature'], 400);
        }

        $data = json_decode($rawData, true);
        if (!$data || !isset($data['invoice_id'])) {  // Proveri polje 'invoice_id' umesto 'deposit_id'
            return new JsonResponse(['error' => 'Invalid data'], 400);
        }

        // Pronalaženje fakture po 'invoice_id' (ili nekom drugom jedinstvenom identifikatoru)
        $invoice = $this->invoiceRepository->find($data['invoice_id']);  // Koristi 'find' za primarni ključ
        if (!$invoice) {
            return new JsonResponse(['error' => 'Invoice not found'], 404);
        }

        // Ažuriranje statusa fakture
        $status = $data['status'] ?? 'ERROR';
        $invoice->setStatus($status);

        // Čuvanje callback zahteva
        $callback = new Callback();
        $callback->setInvoice($invoice);
        $callback->setRawData($rawData);
        $callback->setSignature($receivedSignature);
        $callback->setStatus($status);
        $em->persist($callback);
        $em->flush();

        return new JsonResponse(['message' => 'Callback processed successfully'], 200);
    }
}
