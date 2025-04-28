<?php

namespace Uru\NexWayDTO\ProductDescription;

use Uru\NexWayDTO\BaseDtoResponse;

/**
 * Response example:
 * {
 * "id": "00000000-0000-0000-0000-000000000000",
 * "customerId": "00000000-0000-0000-0000-000000000000",
 * "createDate": 1739905655641,
 * "updateDate": 1739991650777,
 * "dbVersion": 1,
 * "lastUpdateReason": "resource update thru REST Api",
 * "description": "long desc",
 * "catalogId": "00000000-0000-0000-0000-000000000000",
 * "fallbackLocale": "en-US",
 * "marketingName": "Product Name",
 * "localizedMarketingName": {
 * "en-US": "Product Name"
 * }
 * }.
 */
class ProductDescriptionResponse extends BaseDtoResponse
{
    protected ?string $id = null;
    protected ?string $customerId = null;
    protected ?string $fallbackLocale = null;
    protected ?string $marketingName = null;
    protected ?string $catalogId = null;
    protected ?string $description = null;
    protected ?string $shortDesc = null;
    protected ?string $longDesc = null;
    protected ?string $status = null;
    protected ?string $error = null;
    protected ?string $exception = null;
    protected ?string $message = null;
    protected ?string $path = null;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    public function getCatalogId(): ?string
    {
        return $this->catalogId;
    }

    public function setCatalogId(?string $catalogId): void
    {
        $this->catalogId = $catalogId;
    }

    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }

    public function setCustomerId(?string $customerId): void
    {
        $this->customerId = $customerId;
    }

    public function getFallbackLocale(): ?string
    {
        return $this->fallbackLocale;
    }

    public function setFallbackLocale(?string $fallbackLocale): void
    {
        $this->fallbackLocale = $fallbackLocale;
    }

    public function getMarketingName(): ?string
    {
        return $this->marketingName;
    }

    public function setMarketingName(?string $marketingName): void
    {
        $this->marketingName = $marketingName;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function getShortDesc(): ?string
    {
        return $this->shortDesc;
    }

    public function setShortDesc(?string $shortDesc): void
    {
        $this->shortDesc = $shortDesc;
    }

    public function getLongDesc(): ?string
    {
        return $this->longDesc;
    }

    public function setLongDesc(?string $longDesc): void
    {
        $this->longDesc = $longDesc;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    public function getError(): ?string
    {
        return $this->error;
    }

    public function setError(?string $error): void
    {
        $this->error = $error;
    }

    public function getException(): ?string
    {
        return $this->exception;
    }

    public function setException(?string $exception): void
    {
        $this->exception = $exception;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(?string $path): void
    {
        $this->path = $path;
    }
}
