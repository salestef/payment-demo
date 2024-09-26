<?php

namespace App\PaymentProvider;

use App\Entity\Invoice;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;

abstract class AbstractPaymentProvider implements ProviderInterface, ProviderResponseInterface
{


    public function __construct(
        protected readonly HttpClientInterface $httpClient,
        protected readonly SerializerInterface $serializer,
    ){
    }

    public function pspRequest(Invoice $invoice): void
    {
        $pspRequestDto = $this->prepareInvoice($invoice);


        // Serijalizuj DTO u JSON koristeći Serializer komponentu
        $jsonData = $this->serializer->serialize($pspRequestDto, 'json');

        $response = $this->httpClient->request('POST','somewher',[]);
        $this->getResponse($response);
    }
}