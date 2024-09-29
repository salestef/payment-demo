<?php

namespace App\Service\Payment;

use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class SignatureService
{
    public function __construct(
        private readonly ParameterBagInterface $parameterBag,
    )
    {
    }

    public function sign(array $rawData): string
    {
        $jsonEncodedData = json_encode($rawData, JSON_UNESCAPED_SLASHES | JSON_THROW_ON_ERROR);

        $secretKey = $this->parameterBag->get('SECRET_KEY');

        return base64_encode(hash_hmac('sha256', $jsonEncodedData, $secretKey));
    }
}