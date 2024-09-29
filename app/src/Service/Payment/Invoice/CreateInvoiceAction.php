<?php

namespace App\Service\Payment\Invoice;

use App\Entity\Invoice;
use App\Service\Payment\Invoice\Mock\AbstractCreateInvoiceResponseMock;
use App\Service\Payment\Invoice\Mock\MockInterface;
use App\Service\Payment\SignatureService;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;

class CreateInvoiceAction
{
    public function __construct(
        private readonly SignatureService                  $signatureService,
        private readonly HttpClientInterface               $client,
        private readonly AbstractCreateInvoiceResponseMock $providerResponseMock,
        private readonly RouterInterface                   $router
    )
    {
    }

    public function execute(Invoice $invoice): MockInterface|ResponseInterface
    {
        $notificationUrl = $this->router->generate('handle_callback', [], RouterInterface::ABSOLUTE_URL);

        $requestData = [
            "merchant_order_id" => $invoice->getId(),
            "amount" => $invoice->getAmount(),
            "country" => "US",
            "currency" => "USD",
            "payer" => [
                "document" => "1234567890",
                "first_name" => "John",
                "last_name" => "Doe",
                "phone" => "+38169123456789",
                "email" => "johDoe@hotmail.com"
            ],
            "payment_method" => "TEST_METHOD_XX",
            "description" => "test description",
            "client_ip" => "123.123.123.123",
            "notification_url" => $notificationUrl
        ];


        // FIXME Simulation of Create invoice request to Payment provider just for Example purposes!

//        $signature = $this->signatureService->sign($requestData);
//
//        $response = $this->client->request('POST', 'https://payment-provider.com/invoice', [
//            'headers' => [
//                'X-signature' => $signature,
//                'Content-Type' => 'application/json',
//            ],
//            'json' => $requestData
//        ]);

        // Save Create Invoice request data
        $invoice->setRequestData(json_encode($requestData));

        // Init mock response data
        $response = $this->providerResponseMock->initMock($invoice);

        return $response;

    }
}