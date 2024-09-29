<?php

namespace App\DTO;

use Symfony\Component\Validator\Constraints as Assert;

class CallbackDTO
{
    /**
     * @Assert\NotBlank()
     */
    private string $merchant_order_id;

    /**
     * @Assert\NotBlank()
     * @Assert\Positive()
     */
    private $amount;

    /**
     * @Assert\NotBlank()
     */
    private string $currency;

    /**
     * @Assert\NotBlank()
     * @Assert\Choice({"SUCCESSFUL", "PENDING", "FAILED"})
     */
    private string $status;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("integer")
     */
    private int $timestamp;

    /**
     * @Assert\NotBlank(allowNull=true)
     */
    private ?string $rawData = null;

    /**
     * @Assert\NotBlank(allowNull=true)
     */
    private ?string $signature = null;

    public function getMerchantOrderId(): string
    {
        return $this->merchant_order_id;
    }

    public function setMerchantOrderId(string $merchant_order_id): self
    {
        $this->merchant_order_id = $merchant_order_id;
        return $this;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function setAmount($amount): self
    {
        $this->amount = $amount;
        return $this;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;
        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function getTimestamp(): int
    {
        return $this->timestamp;
    }

    public function setTimestamp(int $timestamp): self
    {
        $this->timestamp = $timestamp;
        return $this;
    }

    public function getRawData(): ?string
    {
        return $this->rawData;
    }

    public function setRawData(?string $rawData): self
    {
        $this->rawData = $rawData;
        return $this;
    }

    public function getSignature(): ?string
    {
        return $this->signature;
    }

    public function setSignature(?string $signature): self
    {
        $this->signature = $signature;
        return $this;
    }
}
