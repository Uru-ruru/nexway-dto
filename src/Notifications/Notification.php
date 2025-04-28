<?php

namespace Uru\NexWayDTO\Notifications;

use Uru\NexWayDTO\BaseDtoResponse;

/**
 * Request example:
 * {
 * "orderId": "1234567890",
 * "lineItemId": "00000000-0000-0000-0000-000000000000",
 * "licenseId": "00000000-0000-0000-0000-000000000000",
 * "subscriptionId": "00000000-0000-0000-0000-000000000000",
 * "productId": "00000000-0000-0000-0000-000000000000",
 * "publisherProductId": "123",
 * "externalContext": "base64"
 * }.
 */
class Notification extends BaseDtoResponse
{
    protected ?string $orderId = null;
    protected ?string $lineItemId = null;
    protected ?string $licenseId = null;
    protected ?string $subscriptionId = null;
    protected ?string $productId = null;
    protected ?string $publisherProductId = null;
    protected null|array|string $externalContext = null;

    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    public function setOrderId(?string $orderId): void
    {
        $this->orderId = $orderId;
    }

    public function getLineItemId(): ?string
    {
        return $this->lineItemId;
    }

    public function setLineItemId(?string $lineItemId): void
    {
        $this->lineItemId = $lineItemId;
    }

    public function getLicenseId(): ?string
    {
        return $this->licenseId;
    }

    public function setLicenseId(?string $licenseId): void
    {
        $this->licenseId = $licenseId;
    }

    public function getSubscriptionId(): ?string
    {
        return $this->subscriptionId;
    }

    public function setSubscriptionId(?string $subscriptionId): void
    {
        $this->subscriptionId = $subscriptionId;
    }

    public function getProductId(): ?string
    {
        return $this->productId;
    }

    public function setProductId(?string $productId): void
    {
        $this->productId = $productId;
    }

    public function getPublisherProductId(): ?string
    {
        return $this->publisherProductId;
    }

    public function setPublisherProductId(?string $publisherProductId): void
    {
        $this->publisherProductId = $publisherProductId;
    }

    public function getExternalContext(): null|array|string
    {
        return $this->externalContext;
    }

    public function setExternalContext(null|array|string $externalContext): void
    {
        $this->externalContext = $externalContext;
    }
}
