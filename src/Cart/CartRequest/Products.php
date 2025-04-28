<?php

namespace Uru\NexWayDTO\Cart\CartRequest;

use Uru\NexWayDTO\BaseDtoRequest;

class Products extends BaseDtoRequest
{
    protected string $id = self::FIELD_NOT_SET;
    protected string $crossSellBy = self::FIELD_NOT_SET;
    protected string $currentExpirationDate = self::FIELD_NOT_SET;
    protected DiscountPlan|string $discountPlan = self::FIELD_NOT_SET;
    protected bool|string $discountPlanIgnorePurchaseDiscount = self::FIELD_NOT_SET;
    protected int|string $discountPlanStep = self::FIELD_NOT_SET;
    protected string $discountPlanTag = self::FIELD_NOT_SET;
    protected int|string $durationUntilTrialEnd = self::FIELD_NOT_SET;
    protected string $forcedBy = self::FIELD_NOT_SET;
    protected string $licenseId = self::FIELD_NOT_SET;
    protected string $marketingCampaignId = self::FIELD_NOT_SET;
    protected string $nextExpirationDate = self::FIELD_NOT_SET;
    protected string $parentId = self::FIELD_NOT_SET;
    protected string $previousLineItemId = self::FIELD_NOT_SET;
    protected array|string $priceFunctionParameters = self::FIELD_NOT_SET;
    protected int|string $quantity = self::FIELD_NOT_SET;
    protected bool|string $quantityMaxReached = self::FIELD_NOT_SET;
    protected bool|string $remotePrice = self::FIELD_NOT_SET;
    protected string $subscriptionTemplate = self::FIELD_NOT_SET;
    protected bool|string $trial = self::FIELD_NOT_SET;
    protected string $upSellBy = self::FIELD_NOT_SET;
    protected string $currency = self::FIELD_NOT_SET;
    protected string $offerId = self::FIELD_NOT_SET;
    protected string $offerLineId = self::FIELD_NOT_SET;

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function setCrossSellBy(string $crossSellBy): void
    {
        $this->crossSellBy = $crossSellBy;
    }

    public function setCurrentExpirationDate(string $currentExpirationDate): void
    {
        $this->currentExpirationDate = $currentExpirationDate;
    }

    public function setDiscountPlan(DiscountPlan $discountPlan): void
    {
        $this->discountPlan = $discountPlan;
    }

    public function setDiscountPlanIgnorePurchaseDiscount(bool $discountPlanIgnorePurchaseDiscount): void
    {
        $this->discountPlanIgnorePurchaseDiscount = $discountPlanIgnorePurchaseDiscount;
    }

    public function setDiscountPlanStep(int $discountPlanStep): void
    {
        $this->discountPlanStep = $discountPlanStep;
    }

    public function setDiscountPlanTag(string $discountPlanTag): void
    {
        $this->discountPlanTag = $discountPlanTag;
    }

    public function setDurationUntilTrialEnd(int $durationUntilTrialEnd): void
    {
        $this->durationUntilTrialEnd = $durationUntilTrialEnd;
    }

    public function setForcedBy(string $forcedBy): void
    {
        $this->forcedBy = $forcedBy;
    }

    public function setLicenseId(string $licenseId): void
    {
        $this->licenseId = $licenseId;
    }

    public function setMarketingCampaignId(string $marketingCampaignId): void
    {
        $this->marketingCampaignId = $marketingCampaignId;
    }

    public function setNextExpirationDate(string $nextExpirationDate): void
    {
        $this->nextExpirationDate = $nextExpirationDate;
    }

    public function setParentId(string $parentId): void
    {
        $this->parentId = $parentId;
    }

    public function setPreviousLineItemId(string $previousLineItemId): void
    {
        $this->previousLineItemId = $previousLineItemId;
    }

    public function setPriceFunctionParameters(array $priceFunctionParameters): void
    {
        $this->priceFunctionParameters = $priceFunctionParameters;
    }

    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }

    public function setQuantityMaxReached(bool $quantityMaxReached): void
    {
        $this->quantityMaxReached = $quantityMaxReached;
    }

    public function setRemotePrice(bool $remotePrice): void
    {
        $this->remotePrice = $remotePrice;
    }

    public function setSubscriptionTemplate(string $subscriptionTemplate): void
    {
        $this->subscriptionTemplate = $subscriptionTemplate;
    }

    public function setTrial(bool $trial): void
    {
        $this->trial = $trial;
    }

    public function setUpSellBy(string $upSellBy): void
    {
        $this->upSellBy = $upSellBy;
    }

    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }

    public function setOfferId(string $offerId): void
    {
        $this->offerId = $offerId;
    }

    public function setOfferLineId(string $offerLineId): void
    {
        $this->offerLineId = $offerLineId;
    }

    public function jsonSerialize(): array
    {
        $data = [
            'id' => $this->id,
            'crossSellBy' => $this->crossSellBy,
            'currentExpirationDate' => $this->currentExpirationDate,
            'discountPlan' => $this->discountPlan,
            'discountPlanIgnorePurchaseDiscount' => $this->discountPlanIgnorePurchaseDiscount,
            'discountPlanStep' => $this->discountPlanStep,
            'discountPlanTag' => $this->discountPlanTag,
            'durationUntilTrialEnd' => $this->durationUntilTrialEnd,
            'forcedBy' => $this->forcedBy,
            'licenseId' => $this->licenseId,
            'marketingCampaignId' => $this->marketingCampaignId,
            'nextExpirationDate' => $this->nextExpirationDate,
            'parentId' => $this->parentId,
            'previousLineItemId' => $this->previousLineItemId,
            'priceFunctionParameters' => $this->priceFunctionParameters,
            'quantity' => $this->quantity,
            'quantityMaxReached' => $this->quantityMaxReached,
            'isRemotePrice' => $this->remotePrice,
            'subscriptionTemplate' => $this->subscriptionTemplate,
            'trial' => $this->trial,
            'upSellBy' => $this->upSellBy,
            'currency' => $this->currency,
            'offerId' => $this->offerId,
            'offerLineId' => $this->offerLineId,
        ];

        return $this->filterUnsetFields($data);
    }
}
