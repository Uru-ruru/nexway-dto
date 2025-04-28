<?php

namespace Uru\NexWayDTO\Product;

use Uru\NexWayDTO\BaseDtoResponse;

/**
 * Response example:
 * {
 * "id":"00000000-0000-0000-0000-000000000000",
 * "customerId":"00000000-0000-0000-0000-000000000000",
 * "createDate":1739904359915,
 * "updateDate":1739904359915,
 * "dbVersion":0,
 * "lastUpdateReason":"resource creation thru REST Api",
 * "lifeTime":"1YEAR",
 * "paidTrial":false,
 * "productFamily":"Product Family",
 * "physical":false,
 * "publisherRefId":"123",
 * "salesMode":"STANDARD",
 * "type":"SOFTWARE",
 * "businessSegment":"B2B",
 * "externalContext":"",
 * "catalogId":"00000000-0000-0000-0000-000000000000",
 * "descriptionId":"00000000-0000-0000-0000-000000000000",
 * "unifiedRegisterSoftware":false,
 * "sellingStores":["00000000-0000-0000-0000-000000000000"],
 * "prices":{"defaultCurrency":"USD","priceByCountryByCurrency":{"USD":{"default":{"value":123,"vatIncluded":false}}}},
 * "status":"ENABLED",
 * "genericName":"Product Name"
 * }.
 */
class ProductResponse extends BaseDtoResponse
{
    protected ?string $id = null;
    protected ?string $lifeTime = null;
    protected ?string $publisherRefId = null;
    protected ?string $catalogId = null;
    protected ?string $descriptionId = null;
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

    public function getLifeTime(): ?string
    {
        return $this->lifeTime;
    }

    public function setLifeTime(?string $lifeTime): void
    {
        $this->lifeTime = $lifeTime;
    }

    public function getPublisherRefId(): ?string
    {
        return $this->publisherRefId;
    }

    public function setPublisherRefId(?string $publisherRefId): void
    {
        $this->publisherRefId = $publisherRefId;
    }

    public function getCatalogId(): ?string
    {
        return $this->catalogId;
    }

    public function setCatalogId(?string $catalogId): void
    {
        $this->catalogId = $catalogId;
    }

    public function getDescriptionId(): ?string
    {
        return $this->descriptionId;
    }

    public function setDescriptionId(?string $descriptionId): void
    {
        $this->descriptionId = $descriptionId;
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
