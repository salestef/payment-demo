<?php

use App\Entity\Callback;
use App\Enum\InvoiceStatusEnum;
use App\Service\Payment\Callback\CallbackAction;
use App\Service\Payment\SignatureService;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class CallbackActionTest extends WebTestCase
{
    public function testHandleCallbackSuccess(): void
    {
        $signatureService = $this->createMock(SignatureService::class);
        $signatureService->method('sign')->willReturn('validsignature');

        $data = [
            'merchant_order_id' => '6',
            'amount' => 100,
            'currency' => 'USD',
            'status' => InvoiceStatusEnum::STATUS_SUCCESSFUL->value,
            'timestamp' => time(),
        ];

        $client = static::createClient();
        $client->getContainer()->set(SignatureService::class, $signatureService);

        $client->request(
            'POST',
            '/callback',
            [],
            [],
            [
                'HTTP_X-signature' => 'validsignature',
                'CONTENT_TYPE' => 'application/json'
            ],
            json_encode($data)
        );

        $this->assertResponseStatusCodeSame(Response::HTTP_OK);
        $this->assertJsonStringEqualsJsonString(
            json_encode(['message' => 'Callback processed successfully']),
            $client->getResponse()->getContent()
        );
    }

    public function testHandleCallbackInvalidSignature(): void
    {
        $signatureService = $this->createMock(SignatureService::class);
        $signatureService->method('sign')->willReturn('validsignature');

        $data = [
            'merchant_order_id' => '12345',
            'amount' => 100,
            'currency' => 'USD',
            'status' => InvoiceStatusEnum::STATUS_SUCCESSFUL->value,
            'timestamp' => time(),
        ];

        $client = static::createClient();
        $client->getContainer()->set(SignatureService::class, $signatureService);

        $client->request(
            'POST',
            '/callback',
            [],
            [],
            [
                'HTTP_X-signature' => 'invalidsignature',
                'CONTENT_TYPE' => 'application/json'
            ],
            json_encode($data)
        );

        $this->assertResponseStatusCodeSame(400);
        $this->assertJsonStringEqualsJsonString(
            json_encode(['error' => 'Invalid signature', 'details' => ['Signature' => 'invalidsignature']]),
            $client->getResponse()->getContent()
        );
    }

    public function testHandleCallbackErrorStatus(): void
    {
        $signatureService = $this->createMock(SignatureService::class);
        $signatureService->method('sign')->willReturn('validsignature');

        $callback = new Callback();
        $callback->setStatus(InvoiceStatusEnum::STATUS_ERROR->value);

        $callbackAction = $this->createMock(CallbackAction::class);
        $callbackAction->method('execute')->willReturn($callback);

        $data = [
            'merchant_order_id' => '12345',
            'amount' => 100,
            'currency' => 'USD',
            'status' => InvoiceStatusEnum::STATUS_ERROR->value,
            'timestamp' => time(),
        ];

        $client = static::createClient();
        $client->getContainer()->set(SignatureService::class, $signatureService);
        $client->getContainer()->set(CallbackAction::class, $callbackAction);

        $client->request(
            'POST',
            '/callback',
            [],
            [],
            [
                'HTTP_X-signature' => 'validsignature',
                'CONTENT_TYPE' => 'application/json'
            ],
            json_encode($data)
        );

        $this->assertResponseStatusCodeSame(400);
        $this->assertJsonStringEqualsJsonString(
            json_encode([
                'error' => 'Callback failed for invoice id [12345] with error status.',
                'details' => ['merchant_order_id' => '12345']
            ]),
            $client->getResponse()->getContent()
        );
    }
}