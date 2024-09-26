<?php

namespace App\PaymentProvider\Provider;

use App\Entity\Invoice;
use App\PaymentProvider\AbstractPaymentProvider;
use Symfony\Contracts\HttpClient\ResponseInterface;

final class PspProvider extends AbstractPaymentProvider
{

    public function prepareInvoice(Invoice $invoice): object
    {
        $providerDto = new \stdClass();
        $providerDto->amount = $invoice->getAmount();
        $providerDto->first_name = 'Ime';
        return $providerDto;
    }

    public function getResponse(ResponseInterface $response)
    {
        // TODO: Implement getResponse() method.
    }
}