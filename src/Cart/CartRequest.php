<?php

namespace Uru\NexWayDTO\Cart;

use Uru\NexWayDTO\BaseDtoRequest;
use Uru\NexWayDTO\Cart\CartRequest\BuyerBehavior;
use Uru\NexWayDTO\Cart\CartRequest\ConsentFlags;
use Uru\NexWayDTO\Cart\CartRequest\EndUser;
use Uru\NexWayDTO\Cart\CartRequest\Flags;
use Uru\NexWayDTO\Cart\CartRequest\Products;
use Uru\NexWayDTO\Cart\CartRequest\Remitteds;

class CartRequest extends BaseDtoRequest
{
    protected string $id = self::FIELD_NOT_SET;
    protected string $subscriptionId = self::FIELD_NOT_SET;
    protected string $billingPlanId = self::FIELD_NOT_SET;
    protected string $billingPlanPeriod = self::FIELD_NOT_SET;
    protected bool|string $blockDiscounts = self::FIELD_NOT_SET;
    protected BuyerBehavior|string $buyerBehavior = self::FIELD_NOT_SET;
    protected string $catalogId = self::FIELD_NOT_SET;
    protected string $checkoutUrl = self::FIELD_NOT_SET;
    protected ConsentFlags|string $consentFlags = self::FIELD_NOT_SET;
    protected string $country = self::FIELD_NOT_SET;
    protected array|string $discounts = self::FIELD_NOT_SET;
    protected EndUser|string $endUser = self::FIELD_NOT_SET;
    protected string $enduserId = self::FIELD_NOT_SET;
    protected string $externalContext = self::FIELD_NOT_SET;
    protected Flags|string $flags = self::FIELD_NOT_SET;
    protected string $forcedCurrency = self::FIELD_NOT_SET;
    protected bool|string $hideCrossSell = self::FIELD_NOT_SET;
    protected bool|string $hideUpSell = self::FIELD_NOT_SET;
    protected string $initialOrderId = self::FIELD_NOT_SET;
    protected string $ip = self::FIELD_NOT_SET;
    protected bool|string $keepNonRecurringPaymentMethods = self::FIELD_NOT_SET;
    protected string $locale = self::FIELD_NOT_SET;
    protected float|string $mandateValue = self::FIELD_NOT_SET;
    protected array|string $marketingCampaignNames = self::FIELD_NOT_SET;
    protected string $onPaymentClickRedirectUrl = self::FIELD_NOT_SET;
    protected float|string $partialPaymentAmount = self::FIELD_NOT_SET;
    protected string $paymentExternalContext = self::FIELD_NOT_SET;
    protected string $paymentMethod = self::FIELD_NOT_SET;
    protected string $productRecoId = self::FIELD_NOT_SET;

    /**
     * @var Products[]
     */
    protected array $products = [];

    /**
     * @var Remitteds[]
     */
    protected array $remitteds = [];
    protected array|string $salesFlags = self::FIELD_NOT_SET;
    protected string $scenario = self::FIELD_NOT_SET;
    protected string $source = self::FIELD_NOT_SET;
    protected string $storeHostname = self::FIELD_NOT_SET;
    protected string $storeId = self::FIELD_NOT_SET;
    protected int|string $subscriptionGeneration = self::FIELD_NOT_SET;
    protected string $subscriptionSubSource = self::FIELD_NOT_SET;
    protected bool|string $useStrikeThroughPrice = self::FIELD_NOT_SET;
    protected string $userAgent = self::FIELD_NOT_SET;

    /**
     * @var Products[]
     */
    protected array $wantedProducts = [];

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function setSubscriptionId(string $subscriptionId): void
    {
        $this->subscriptionId = $subscriptionId;
    }

    public function setBillingPlanId(string $billingPlanId): void
    {
        $this->billingPlanId = $billingPlanId;
    }

    public function setBillingPlanPeriod(string $billingPlanPeriod): void
    {
        $this->billingPlanPeriod = $billingPlanPeriod;
    }

    public function setBlockDiscounts(bool $blockDiscounts): void
    {
        $this->blockDiscounts = $blockDiscounts;
    }

    public function setBuyerBehavior(BuyerBehavior $buyerBehavior): void
    {
        $this->buyerBehavior = $buyerBehavior;
    }

    public function setCatalogId(string $catalogId): void
    {
        $this->catalogId = $catalogId;
    }

    public function setCheckoutUrl(string $checkoutUrl): void
    {
        $this->checkoutUrl = $checkoutUrl;
    }

    public function setConsentFlags(ConsentFlags $consentFlags): void
    {
        $this->consentFlags = $consentFlags;
    }

    public function setCountry(string $country): void
    {
        $this->country = $country;
    }

    public function setDiscounts(array $discounts): void
    {
        $this->discounts = $discounts;
    }

    public function setEndUser(EndUser $endUser): void
    {
        $this->endUser = $endUser;
    }

    public function setEnduserId(string $enduserId): void
    {
        $this->enduserId = $enduserId;
    }

    public function setExternalContext(string $externalContext): void
    {
        $this->externalContext = $externalContext;
    }

    public function setFlags(Flags $flags): void
    {
        $this->flags = $flags;
    }

    public function setForcedCurrency(string $forcedCurrency): void
    {
        $this->forcedCurrency = $forcedCurrency;
    }

    public function setHideCrossSell(bool $hideCrossSell): void
    {
        $this->hideCrossSell = $hideCrossSell;
    }

    public function setHideUpSell(bool $hideUpSell): void
    {
        $this->hideUpSell = $hideUpSell;
    }

    public function setInitialOrderId(string $initialOrderId): void
    {
        $this->initialOrderId = $initialOrderId;
    }

    public function setIp(string $ip): void
    {
        $this->ip = $ip;
    }

    public function setKeepNonRecurringPaymentMethods(bool $keepNonRecurringPaymentMethods): void
    {
        $this->keepNonRecurringPaymentMethods = $keepNonRecurringPaymentMethods;
    }

    public function setLocale(string $locale): void
    {
        $this->locale = $locale;
    }

    public function setMandateValue(float $mandateValue): void
    {
        $this->mandateValue = $mandateValue;
    }

    public function setMarketingCampaignNames(array $marketingCampaignNames): void
    {
        $this->marketingCampaignNames = $marketingCampaignNames;
    }

    public function setOnPaymentClickRedirectUrl(string $onPaymentClickRedirectUrl): void
    {
        $this->onPaymentClickRedirectUrl = $onPaymentClickRedirectUrl;
    }

    public function setPartialPaymentAmount(float $partialPaymentAmount): void
    {
        $this->partialPaymentAmount = $partialPaymentAmount;
    }

    public function setPaymentExternalContext(string $paymentExternalContext): void
    {
        $this->paymentExternalContext = $paymentExternalContext;
    }

    public function setPaymentMethod(string $paymentMethod): void
    {
        $this->paymentMethod = $paymentMethod;
    }

    public function setProductRecoId(string $productRecoId): void
    {
        $this->productRecoId = $productRecoId;
    }

    public function setProducts(array $products): void
    {
        $this->products = $products;
    }

    public function addProduct(Products $product): void
    {
        $this->products[] = $product;
    }

    public function setRemitteds(array $remitteds): void
    {
        $this->remitteds = $remitteds;
    }

    public function addRemitted(Remitteds $remitted): void
    {
        $this->remitteds[] = $remitted;
    }

    public function setSalesFlags(array $salesFlags): void
    {
        $this->salesFlags = $salesFlags;
    }

    public function setScenario(string $scenario): void
    {
        $this->scenario = $scenario;
    }

    public function setSource(string $source): void
    {
        $this->source = $source;
    }

    public function setStoreHostname(string $storeHostname): void
    {
        $this->storeHostname = $storeHostname;
    }

    public function setStoreId(string $storeId): void
    {
        $this->storeId = $storeId;
    }

    public function setSubscriptionGeneration(int $subscriptionGeneration): void
    {
        $this->subscriptionGeneration = $subscriptionGeneration;
    }

    public function setSubscriptionSubSource(string $subscriptionSubSource): void
    {
        $this->subscriptionSubSource = $subscriptionSubSource;
    }

    public function setUseStrikeThroughPrice(bool $useStrikeThroughPrice): void
    {
        $this->useStrikeThroughPrice = $useStrikeThroughPrice;
    }

    public function setUserAgent(string $userAgent): void
    {
        $this->userAgent = $userAgent;
    }

    public function setWantedProducts(array $wantedProducts): void
    {
        $this->wantedProducts = $wantedProducts;
    }

    public function addWantedProduct(Products $wantedProduct): void
    {
        $this->wantedProducts[] = $wantedProduct;
    }

    public function jsonSerialize(): array
    {
        $data = [
            'id' => $this->id,
            'subscriptionId' => $this->subscriptionId,
            'billingPlanId' => $this->billingPlanId,
            'billingPlanPeriod' => $this->billingPlanPeriod,
            'blockDiscounts' => $this->blockDiscounts,
            'buyerBehavior' => $this->buyerBehavior,
            'catalogId' => $this->catalogId,
            'checkoutUrl' => $this->checkoutUrl,
            'consentFlags' => $this->consentFlags,
            'country' => $this->country,
            'discounts' => $this->discounts,
            'endUser' => $this->endUser,
            'enduserId' => $this->enduserId,
            'externalContext' => $this->externalContext,
            'flags' => $this->flags,
            'forcedCurrency' => $this->forcedCurrency,
            'hideCrossSell' => $this->hideCrossSell,
            'hideUpSell' => $this->hideUpSell,
            'initialOrderId' => $this->initialOrderId,
            'ip' => $this->ip,
            'keepNonRecurringPaymentMethods' => $this->keepNonRecurringPaymentMethods,
            'locale' => $this->locale,
            'mandateValue' => $this->mandateValue,
            'marketingCampaignNames' => $this->marketingCampaignNames,
            'onPaymentClickRedirectUrl' => $this->onPaymentClickRedirectUrl,
            'partialPaymentAmount ' => $this->partialPaymentAmount,
            'paymentExternalContext' => $this->paymentExternalContext,
            'paymentMethod' => $this->paymentMethod,
            'productRecoId' => $this->productRecoId,
            'products' => count($this->products) > 0 ? $this->products : self::FIELD_NOT_SET,
            'remitteds' => count($this->remitteds) > 0 ? $this->remitteds : self::FIELD_NOT_SET,
            'salesFlags' => $this->salesFlags,
            'source' => $this->source,
            'storeHostname' => $this->storeHostname,
            'storeId' => $this->storeId,
            'subscriptionGeneration' => $this->subscriptionGeneration,
            'subscriptionSubSource' => $this->subscriptionSubSource,
            'useStrikeThroughPrice' => $this->useStrikeThroughPrice,
            'userAgent' => $this->userAgent,
            'wantedProducts' => count($this->wantedProducts) > 0 ? $this->wantedProducts : self::FIELD_NOT_SET,
        ];

        return $this->filterUnsetFields($data);
    }
}
