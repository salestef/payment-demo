<?php

namespace App\PaymentProvider;

class SignatureService
{
    public function sign(array $rawData): string
    {
//        $rawData = json_encode([
//            'invoice_id' => 300642187,
//            'status' => 'SUCCESSFUL'
//        ]);

        $jsonEncodedData = json_encode($rawData, JSON_THROW_ON_ERROR);
        dd($jsonEncodedData);
        $secretKey = 'SOME_SECRET_KEY'; // Tvoj tajni ključ
        $calculatedSignature = base64_encode(hash_hmac('sha256', $jsonEncodedData, $secretKey));

        return $calculatedSignature;
    }
}