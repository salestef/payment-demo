<?php
// src/Controller/PaymentController.php

namespace App\Controller;

use App\DTO\PaymentDTO;
use App\Entity\Invoice;
use App\Form\InvoiceFormType;
use App\PaymentProvider\SignatureService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PaymentController extends AbstractController
{
    public function __construct(
        protected readonly SignatureService $signatureService,
    )
    {
    }

    #[Route('/payment', name: 'payment_form')]
    public function createPayment(Request $request, EntityManagerInterface $entityManager): Response
    {

//        $invoice = new Invoice();
//        $form = $this->createForm(InvoiceFormType::class, $invoice);
        $paymentDTO = new PaymentDTO(); // Kreiraj DTO

//        $form = $this->createForm(InvoiceFormType::class, $invoice);
        $form = $this->createForm(InvoiceFormType::class, $paymentDTO);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // 1. Kreiraj Invoice status: CREATED
            $invoice = new Invoice(); // Kreiraj novi Invoice
            // Postavi amount
            $invoice->setAmount($paymentDTO->getAmount())
                ->setStatus('CREATED');

            $entityManager->persist($invoice);
            $entityManager->flush();

            // 2. Mock-ujanje PSP zahteva
            $pspResponse = $this->mockPspInvoiceCreation($invoice);

            // 3. Obradi odgovor i ažuriraj status
            if ($pspResponse['status'] === 'success') {
                $invoice->setStatus('PENDING');
                $invoice->setResponseData(json_encode($pspResponse));
            } else {
                $invoice->setStatus('ERROR');
            }

            $entityManager->flush();

            // 4. Prikaži korisniku QR kod ili preusmeri na redirect URL
            if (isset($pspResponse['redirect_url'])) {
                return $this->redirect($pspResponse['redirect_url']);
            }

            return $this->render('payment/success.html.twig', [
                'payment_info' => $pspResponse['payment_info'],
            ]);
        }

        return $this->render('payment/form.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/invoice/signature/{id}', name: 'invoice_signature', methods: ['GET'])]
    public function getInvoiceSignature(int $id): JsonResponse
    {
        $signature = $this->signatureService->sign(['invoice_id' => $id, 'status' => 'SUCCESSFUL']);
        return new JsonResponse(['signature' => $signature], 200);
    }

    private function mockPspInvoiceCreation(Invoice $invoice): array
    {
        // Ovo je mock-ovan odgovor, umesto stvarnog PSP API poziva
        return [
            'status' => 'success',
//            'redirect_url' => 'https://www.example.com/payment_redirect',
            'payment_info' => [
                'amount' => $invoice->getAmount(),
//                'amount' => 50,
                'currency' => 'USD',
                'qr_code' => 'data:image/png;base64,...',
            ]
        ];
    }
}
