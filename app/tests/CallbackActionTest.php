<?php

use App\Entity\Callback;
use App\Entity\Invoice;
use App\Enum\InvoiceStatusEnum;
use App\Service\Payment\Callback\CallbackAction;
use App\Service\Payment\SignatureService;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class CallbackActionTest extends WebTestCase
{
    protected readonly EntityManager $em;

    protected function setUp(): void
    {
        $kernel = static::bootKernel();
        $container = $kernel->getContainer();

        $this->em = $container->get('doctrine.orm.entity_manager');


        self::ensureKernelShutdown();
    }

    protected function generateInvoice(): Invoice {

        $invoice = (new Invoice())
            ->setAmount(100)
            ->setStatus(InvoiceStatusEnum::STATUS_PENDING)
            ->setCurrency('EUR');

        $this->em->persist($invoice);
        $this->em->flush();
        return $invoice;
    }
    public function testHandleCallbackSuccess(): void
    {
        $signatureService = $this->createMock(SignatureService::class);
        $signatureService->method('sign')->willReturn('validsignature');

        $invoice = $this->generateInvoice();
        $data = [
            'merchant_order_id' => strval($invoice->getId()),
            'amount' => $invoice->getAmount(),
            'currency' => $invoice->getCurrency(),
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

        $invoice = $this->generateInvoice();
        $data = [
            'merchant_order_id' => strval($invoice->getId()),
            'amount' => $invoice->getAmount(),
            'currency' => $invoice->getCurrency(),
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

        $invoice = $this->generateInvoice();
        $data = [
            'merchant_order_id' => strval($invoice->getId()),
            'amount' => $invoice->getAmount(),
            'currency' => $invoice->getCurrency(),
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
                'error' => "Callback failed for invoice id [{$invoice->getId()}] with error status.",
                'details' => ['merchant_order_id' => strval($invoice->getId())]
            ]),
            $client->getResponse()->getContent()
        );
    }
}