<?php

namespace Uru\NexWayDTO\ProductDescription;

use Uru\NexWayDTO\BaseDtoRequest;

class ProductDescriptionRequest extends BaseDtoRequest
{
    protected string $id = self::FIELD_NOT_SET;
    protected string $customerId = self::FIELD_NOT_SET;
    protected string $description = self::FIELD_NOT_SET;
    protected string $catalogId = self::FIELD_NOT_SET;
    protected string $fallbackLocale = self::FIELD_NOT_SET;
    protected string $marketingName = self::FIELD_NOT_SET;
    protected array|string $localizedMarketingName = self::FIELD_NOT_SET;
    protected array|string $localizedShortDesc = self::FIELD_NOT_SET;
    protected array|string $localizedLongDesc = self::FIELD_NOT_SET;
    protected array|string $localizedThankYouDesc = self::FIELD_NOT_SET;
    protected array|string $localizedPurchaseEmailDesc = self::FIELD_NOT_SET;
    protected array|string $localizedManualRenewalEmailDesc = self::FIELD_NOT_SET;

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function setCustomerId(string $customerId): void
    {
        $this->customerId = $customerId;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function setCatalogId(string $catalogId): void
    {
        $this->catalogId = $catalogId;
    }

    public function setFallbackLocale(string $fallbackLocale): void
    {
        $this->fallbackLocale = $fallbackLocale;
    }

    public function setMarketingName(string $marketingName): void
    {
        $this->marketingName = $marketingName;
    }

    public function addLocalizedMarketingName(string $locale, string $localizedMarketingName): void
    {
        if (!is_array($this->localizedMarketingName)) {
            $this->localizedMarketingName = [];
        }
        $this->localizedMarketingName[$locale] = $localizedMarketingName;
    }

    public function addLocalizedShortDesc(string $locale, string $localizedShortDesc): void
    {
        if (!is_array($this->localizedShortDesc)) {
            $this->localizedShortDesc = [];
        }
        $this->localizedShortDesc[$locale] = $localizedShortDesc;
    }

    public function addLocalizedLongDesc(string $locale, string $localizedLongDesc): void
    {
        if (!is_array($this->localizedLongDesc)) {
            $this->localizedLongDesc = [];
        }
        $this->localizedLongDesc[$locale] = $localizedLongDesc;
    }

    public function addLocalizedThankYouDesc(string $locale, string $localizedThankYouDesc): void
    {
        if (!is_array($this->localizedThankYouDesc)) {
            $this->localizedThankYouDesc = [];
        }
        $this->localizedThankYouDesc[$locale] = $localizedThankYouDesc;
    }

    public function addLocalizedPurchaseEmailDesc(string $locale, string $localizedPurchaseEmailDesc): void
    {
        if (!is_array($this->localizedPurchaseEmailDesc)) {
            $this->localizedPurchaseEmailDesc = [];
        }
        $this->localizedPurchaseEmailDesc[$locale] = $localizedPurchaseEmailDesc;
    }

    public function addLocalizedManualRenewalEmailDesc(string $locale, string $localizedManualRenewalEmailDesc): void
    {
        if (!is_array($this->localizedManualRenewalEmailDesc)) {
            $this->localizedManualRenewalEmailDesc = [];
        }
        $this->localizedManualRenewalEmailDesc[$locale] = $localizedManualRenewalEmailDesc;
    }

    public function jsonSerialize(): array
    {
        $data = [
            'id' => $this->id,
            'customerId' => $this->customerId,
            'description' => $this->description,
            'catalogId' => $this->catalogId,
            'fallbackLocale' => $this->fallbackLocale,
            'marketingName' => $this->marketingName,
            'localizedMarketingName' => $this->localizedMarketingName,
            'localizedShortDesc' => $this->localizedShortDesc,
            'localizedLongDesc' => $this->localizedLongDesc,
            'localizedThankYouDesc' => $this->localizedThankYouDesc,
            'localizedPurchaseEmailDesc' => $this->localizedPurchaseEmailDesc,
            'localizedManualRenewalEmailDesc' => $this->localizedManualRenewalEmailDesc,
        ];

        return $this->filterUnsetFields($data);
    }
}
