<?php

use App\Entity\Invoice;
use App\Service\Payment\Invoice\CreateInvoiceAction;
use App\Service\Payment\Invoice\Mock\Response\InvalidSignatureResponseResponseMock;
use App\Service\Payment\Invoice\Mock\Response\SuccessResponseResponseMock;
use App\Service\Payment\Invoice\Mock\MockInterface;
use App\Service\Payment\SignatureService;
use PHPUnit\Framework\TestCase;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;

class CreateInvoiceActionTest extends WebTestCase
{
//    public function testExecuteWithSuccessResponse()
//    {
//        // Create mocks for dependencies
//        $signatureServiceMock = $this->createMock(SignatureService::class);
//        $clientMock = $this->createMock(HttpClientInterface::class);
//
//        // Kreiramo SuccessResponseResponseMock instancu i mockujemo ponašanje
//        $successResponseMock = $this->createMock(SuccessResponseResponseMock::class);
//
//        // Set expectations for initMock method
//        $invoice = new Invoice();  // Ovo je prava instanca Invoice-a koja će biti prosleđena
//
//        // Očekujemo da se initMock pozove sa instancom Invoice-a i da vrati sebe (chaining)
//        $successResponseMock->method('initMock')
//            ->with($invoice)
//            ->willReturnSelf();
//
//        // Mockujemo getStatusCode metod da vraća 201
//        $successResponseMock->method('getStatusCode')
//            ->willReturn(201);
//
//        // Instantiate the action with mocked dependencies
//        $action = new CreateInvoiceAction($signatureServiceMock, $clientMock, $successResponseMock);
//
//        // Call the execute method
//        $response = $action->execute($invoice);
//
//        // Assert that the response implements both MockInterface and ResponseInterface
//        $this->assertInstanceOf(MockInterface::class, $response, 'The response should implement MockInterface');
//        $this->assertInstanceOf(ResponseInterface::class, $response, 'The response should implement ResponseInterface');
//
//        // Assert that the status code is 201
//        $this->assertEquals(201, $response->getStatusCode(), 'The response status code should be 201');
//    }
//
//
//    public function testExecuteReturnsSuccessfulResponse()
//    {
//        $invoice = new Invoice();
//        $invoice->setId(123);
//        $invoice->setAmount(1000);
//
//        // Kreiramo SuccessResponseResponseMock instancu i simuliramo response sa statusom 201
//        $responseMock = new SuccessResponseResponseMock();
//        $responseMock->initMock($invoice); // Inicijalizujemo mock sa podacima invoice-a
//
//        // Sada ćemo testirati da li je statusni kod onaj koji očekujemo (201)
//        $this->assertEquals(201, $responseMock->getStatusCode());
//
//        // Proveravamo podatke koji dolaze iz mock metode
//        $responseData = $responseMock->mock();
//
//        $this->assertArrayHasKey('deposit_id', $responseData);
//        $this->assertEquals(300642187, $responseData['deposit_id']);
//        $this->assertEquals('1111222344556', $responseData['user_id']);
//        $this->assertEquals('123', $responseData['merchant_order_id']);
//        $this->assertArrayHasKey('payment_info', $responseData);
//
//        $this->assertEquals('TEST_METHOD_XX', $responseData['payment_info']['payment_method']);
//        $this->assertEquals(1000, $responseData['payment_info']['amount']);
//        $this->assertEquals('USD', $responseData['payment_info']['currency']);
//    }

    public function testHandleInvoiceSuccess()
    {
        // Postaviti mock za CreateInvoiceAction
        $mockAction = $this->createMock(CreateInvoiceAction::class);
        $mockAction->method('execute')
            ->willReturn(new SuccessResponseResponseMock()); // Koristi mock klasu

        $client = static::createClient();
        $client->request('POST', '/invoice', [
            'amount' => 100.00,
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john.doe@example.com',
            'description' => 'Neka faktura',
            'currency' => 'USD',
        ]);

        $this->assertResponseStatusCodeSame(Response::HTTP_OK);
        $this->assertResponseRedirects('/expected_redirect_url');
    }

    public function testHandleInvoiceInvalidSignature()
    {
        // Postaviti mock za CreateInvoiceAction
        $mockAction = $this->createMock(CreateInvoiceAction::class);
        $mockAction->method('execute')
            ->willReturn(new InvalidSignatureResponseResponseMock()); // Koristi mock klasu

        $client = static::createClient();
        $client->request('POST', '/invoice', [
            'amount' => 100.00,
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john.doe@example.com',
            'description' => 'Neka faktura',
            'currency' => 'USD',
        ]);

        $json = json_decode($client->getResponse()->getContent(), true, 512, JSON_THROW_ON_ERROR);

        self::assertResponseStatusCodeSame(Response::HTTP_PAYMENT_REQUIRED, $client->getResponse()->getStatusCode());

        self::assertArrayHasKey('error', $json);
        self::assertEquals('Invalid signature', $json['error']);
    }

}