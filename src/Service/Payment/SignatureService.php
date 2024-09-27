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
//        print_r($rawData);
//        die;
        $jsonEncodedData = json_encode($rawData, JSON_UNESCAPED_SLASHES | JSON_THROW_ON_ERROR);
//        $signJSON = '{"merchant_order_id":"6","amount":"340","currency":"USD","status":"SUCCESSFUL","timestamp":1726671599}';
//        $rawJSON = '{"merchant_order_id":"6","amount":"340","currency":"USD","status":"SUCCESSFUL","timestamp":1726671599}';
//        if ($signJSON !== $rawJSON) {
//            var_dump('NESTO NIJE ISTO');
//        }
//
//            var_dump($jsonEncodedData);
//        die;
        $secretKey = $this->parameterBag->get('SECRET_KEY');

        return base64_encode(hash_hmac('sha256', $jsonEncodedData, $secretKey));
    }
}