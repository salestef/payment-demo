<?php

use App\Service\Payment\Invoice\CreateInvoiceAction;
use App\Service\Payment\Invoice\Mock\Response\AmountRequiredFailResponseResponseMock;
use App\Service\Payment\Invoice\Mock\Response\InvalidSignatureResponseResponseMock;
use App\Service\Payment\Invoice\Mock\Response\SuccessResponseResponseMock;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class CreateInvoiceActionTest extends WebTestCase
{
    public function testHandleInvoiceSuccess()
    {
        $this->client = static::createClient();

        $mockAction = $this->createMock(CreateInvoiceAction::class);
        $mockAction->method('execute')
            ->willReturn(new SuccessResponseResponseMock());

        self::getContainer()->set(CreateInvoiceAction::class, $mockAction);

        $this->sendRequest();

        $this->assertResponseStatusCodeSame(Response::HTTP_OK);
    }


    public function testHandleInvoiceInvalidSignatureFail()
    {
        $this->client = static::createClient();

        $mockAction = $this->createMock(CreateInvoiceAction::class);
        $mockAction->method('execute')
            ->willReturn(new InvalidSignatureResponseResponseMock());

        self::getContainer()->set(CreateInvoiceAction::class, $mockAction);

        $this->sendRequest();

        self::assertResponseStatusCodeSame(Response::HTTP_PAYMENT_REQUIRED, $this->client->getResponse()->getStatusCode());

        $json = json_decode($this->client->getResponse()->getContent(), true, 512, JSON_THROW_ON_ERROR);
        self::assertArrayHasKey('error', $json);
        self::assertEquals('Invalid signature', $json['error']);
    }

    public function testHandleInvoiceAmountRequiredFail()
    {
        $this->client = static::createClient();

        $mockAction = $this->createMock(CreateInvoiceAction::class);
        $mockAction->method('execute')
            ->willReturn(new AmountRequiredFailResponseResponseMock());

        self::getContainer()->set(CreateInvoiceAction::class, $mockAction);

        $this->sendRequest();

        self::assertResponseStatusCodeSame(Response::HTTP_PAYMENT_REQUIRED, $this->client->getResponse()->getStatusCode());

        $json = json_decode($this->client->getResponse()->getContent(), true, 512, JSON_THROW_ON_ERROR);
        self::assertArrayHasKey('error', $json);
        self::assertEquals('Amount required', $json['error']);
    }

    private function sendRequest(): void
    {
        $formData = [
            'amount' => 100.00,
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john.doe@example.com',
            'description' => 'Some Invoice',
            'currency' => 'USD',
        ];

        $this->client->request('POST', '/invoice', $formData, [], [
            'CONTENT_TYPE' => 'application/x-www-form-urlencoded',
        ]);
    }
}