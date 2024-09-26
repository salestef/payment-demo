<?php

namespace App\PaymentProvider;

use Symfony\Contracts\HttpClient\ResponseInterface;

interface ProviderResponseInterface
{
    public function getResponse(ResponseInterface $response);
}