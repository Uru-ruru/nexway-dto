<?php

namespace Uru\NexWayDTO\Product;

use Uru\NexWayDTO\BaseDtoRequest;
use Uru\NexWayDTO\Enums\BusinessSegment;
use Uru\NexWayDTO\Enums\ProductType;
use Uru\NexWayDTO\Enums\SalesMode;
use Uru\NexWayDTO\Enums\Status;
use Uru\NexWayDTO\Enums\SubscriptionTemplate;
use Uru\NexWayDTO\Product\ProductRequest\ActivationLink;
use Uru\NexWayDTO\Product\ProductRequest\AvailableVariables;
use Uru\NexWayDTO\Product\ProductRequest\Prices;
use Uru\NexWayDTO\Product\ProductRequest\RelatedContents;
use Uru\NexWayDTO\Product\ProductRequest\Resource;

class ProductRequest extends BaseDtoRequest
{
    public const LIFETIME_PATTERN = '/^(((?<duration>[\d]*)(?<period>MONTH|YEAR|DAY|MONTHS|YEARS|DAYS))|PERMANENT)$/';
    protected string $id = self::FIELD_NOT_SET;
    protected ActivationLink|string $activationLink = self::FIELD_NOT_SET;

    /**
     * @var AvailableVariables[]
     */
    protected array $availableVariables = [];
    protected array|string $blackListedCountries = self::FIELD_NOT_SET;
    protected BusinessSegment|string $businessSegment = self::FIELD_NOT_SET;
    protected string $catalogId = self::FIELD_NOT_SET;
    protected string $codeName = self::FIELD_NOT_SET;
    protected string $customFieldsId = self::FIELD_NOT_SET;
    protected string $customerId = self::FIELD_NOT_SET;
    protected int|string $dbVersion = self::FIELD_NOT_SET;
    protected string $defaultLocale = self::FIELD_NOT_SET;
    protected string $descriptionId = self::FIELD_NOT_SET;
    protected string $externalContext = self::FIELD_NOT_SET;
    protected array|string $forcedCrossSaleProductIds = self::FIELD_NOT_SET;
    protected string $fulfillmentTemplate = self::FIELD_NOT_SET;
    protected string $fulfillmentTemplateName = self::FIELD_NOT_SET;
    protected string $genericName = self::FIELD_NOT_SET;
    protected string $lastUpdateReason = self::FIELD_NOT_SET;
    protected string $lifeTime = self::FIELD_NOT_SET;
    protected array|string $localizedLongDesc = self::FIELD_NOT_SET;
    protected array|string $localizedShortDesc = self::FIELD_NOT_SET;
    protected array|string $localizedThankYouDesc = self::FIELD_NOT_SET;
    protected array|string $marketingName = self::FIELD_NOT_SET;
    protected array|string $nextGenerationOf = self::FIELD_NOT_SET;
    protected string $originalId = self::FIELD_NOT_SET;
    protected bool|string $paidTrial = self::FIELD_NOT_SET;
    protected bool|string $physical = self::FIELD_NOT_SET;
    protected string $priceFunction = self::FIELD_NOT_SET;
    protected Prices|string $prices = self::FIELD_NOT_SET;
    protected string $productFamily = self::FIELD_NOT_SET;
    protected string $publisherProductId = self::FIELD_NOT_SET;
    protected string $publisherRefId = self::FIELD_NOT_SET;

    /**
     * @var RelatedContents[]
     */
    protected array $relatedContents = [];
    protected ?\DateTime $releaseDate = null;

    /**
     * @var resource[]
     */
    protected array $resources = [];
    protected SalesMode|string $salesMode = self::FIELD_NOT_SET;
    protected Status|string $status = self::FIELD_NOT_SET;
    protected array|string $sellingStores = self::FIELD_NOT_SET;

    protected string $signedProduct = self::FIELD_NOT_SET;
    protected array|string $subProducts = self::FIELD_NOT_SET;
    protected string|SubscriptionTemplate $subscriptionTemplate = self::FIELD_NOT_SET;
    protected string $taxCode = self::FIELD_NOT_SET;
    protected bool|string $trialAllowed = self::FIELD_NOT_SET;
    protected int|string $trialDuration = self::FIELD_NOT_SET;
    protected ProductType|string $type = self::FIELD_NOT_SET;
    protected bool|string $unifiedRegisterSoftware = self::FIELD_NOT_SET;
    protected string $var = self::FIELD_NOT_SET;
    protected string $variantOf = self::FIELD_NOT_SET;
    protected array|string $visualTags = self::FIELD_NOT_SET;

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function setActivationLink(ActivationLink $activationLink): void
    {
        $this->activationLink = $activationLink;
    }

    public function setAvailableVariables(array $availableVariables): void
    {
        $this->availableVariables = $availableVariables;
    }

    public function addAvailableVariables(AvailableVariables $availableVariables): void
    {
        $this->availableVariables[] = $availableVariables;
    }

    public function setBlackListedCountries(array $blackListedCountries): void
    {
        $this->blackListedCountries = $blackListedCountries;
    }

    public function setBusinessSegment(BusinessSegment $businessSegment): void
    {
        $this->businessSegment = $businessSegment;
    }

    public function setCatalogId(string $catalogId): void
    {
        $this->catalogId = $catalogId;
    }

    public function setCodeName(string $codeName): void
    {
        $this->codeName = $codeName;
    }

    public function setCustomFieldsId(string $customFieldsId): void
    {
        $this->customFieldsId = $customFieldsId;
    }

    public function setCustomerId(string $customerId): void
    {
        $this->customerId = $customerId;
    }

    public function setDbVersion(int $dbVersion): void
    {
        $this->dbVersion = $dbVersion;
    }

    public function setDefaultLocale(string $defaultLocale): void
    {
        $this->defaultLocale = $defaultLocale;
    }

    public function setDescriptionId(string $descriptionId): void
    {
        $this->descriptionId = $descriptionId;
    }

    public function setExternalContext(string $externalContext): void
    {
        $this->externalContext = $externalContext;
    }

    public function setForcedCrossSaleProductIds(array $forcedCrossSaleProductIds): void
    {
        $this->forcedCrossSaleProductIds = $forcedCrossSaleProductIds;
    }

    public function setFulfillmentTemplate(string $fulfillmentTemplate): void
    {
        $this->fulfillmentTemplate = $fulfillmentTemplate;
    }

    public function setFulfillmentTemplateName(string $fulfillmentTemplateName): void
    {
        $this->fulfillmentTemplateName = $fulfillmentTemplateName;
    }

    public function setGenericName(string $genericName): void
    {
        $this->genericName = $genericName;
    }

    public function setLastUpdateReason(string $lastUpdateReason): void
    {
        $this->lastUpdateReason = $lastUpdateReason;
    }

    public function setLifeTime(?string $lifeTime): void
    {
        if (false === preg_match(self::LIFETIME_PATTERN, $lifeTime ?? '')) {
            throw new \RuntimeException('Lifetime must be match pattern "'.self::LIFETIME_PATTERN.'"');
        }
        $this->lifeTime = $lifeTime;
    }

    public function setLocalizedLongDesc(array $localizedLongDesc): void
    {
        $this->localizedLongDesc = $localizedLongDesc;
    }

    public function setLocalizedShortDesc(array $localizedShortDesc): void
    {
        $this->localizedShortDesc = $localizedShortDesc;
    }

    public function setLocalizedThankYouDesc(array $localizedThankYouDesc): void
    {
        $this->localizedThankYouDesc = $localizedThankYouDesc;
    }

    public function setMarketingName(array $marketingName): void
    {
        $this->marketingName = $marketingName;
    }

    public function setNextGenerationOf(array $nextGenerationOf): void
    {
        $this->nextGenerationOf = $nextGenerationOf;
    }

    public function setOriginalId(string $originalId): void
    {
        $this->originalId = $originalId;
    }

    public function setPaidTrial(bool $paidTrial): void
    {
        $this->paidTrial = $paidTrial;
    }

    public function setPhysical(bool $physical): void
    {
        $this->physical = $physical;
    }

    public function setPriceFunction(string $priceFunction): void
    {
        $this->priceFunction = $priceFunction;
    }

    public function setPrices(Prices $prices): void
    {
        $this->prices = $prices;
    }

    public function setProductFamily(string $productFamily): void
    {
        $this->productFamily = $productFamily;
    }

    public function setPublisherProductId(string $publisherProductId): void
    {
        $this->publisherProductId = $publisherProductId;
    }

    public function setPublisherRefId(string $publisherRefId): void
    {
        $this->publisherRefId = $publisherRefId;
    }

    public function setRelatedContents(array $relatedContents): void
    {
        $this->relatedContents = $relatedContents;
    }

    public function setReleaseDate(\DateTime $releaseDate): void
    {
        $this->releaseDate = $releaseDate;
    }

    public function setResources(array $resources): void
    {
        $this->resources = $resources;
    }

    public function setSalesMode(SalesMode $salesMode): void
    {
        $this->salesMode = $salesMode;
    }

    public function setStatus(Status $status): void
    {
        $this->status = $status;
    }

    public function setSellingStores(array $sellingStores): void
    {
        $this->sellingStores = $sellingStores;
    }

    public function setSignedProduct(string $signedProduct): void
    {
        $this->signedProduct = $signedProduct;
    }

    public function setSubProducts(array $subProducts): void
    {
        $this->subProducts = $subProducts;
    }

    public function setSubscriptionTemplate(SubscriptionTemplate $subscriptionTemplate): void
    {
        $this->subscriptionTemplate = $subscriptionTemplate;
    }

    public function setTaxCode(string $taxCode): void
    {
        $this->taxCode = $taxCode;
    }

    public function setTrialAllowed(bool $trialAllowed): void
    {
        $this->trialAllowed = $trialAllowed;
    }

    public function setTrialDuration(int $trialDuration): void
    {
        $this->trialDuration = $trialDuration;
    }

    public function setType(ProductType $type): void
    {
        $this->type = $type;
    }

    public function setUnifiedRegisterSoftware(bool $unifiedRegisterSoftware): void
    {
        $this->unifiedRegisterSoftware = $unifiedRegisterSoftware;
    }

    public function setVar(string $var): void
    {
        $this->var = $var;
    }

    public function setVariantOf(string $variantOf): void
    {
        $this->variantOf = $variantOf;
    }

    public function setVisualTags(array $visualTags): void
    {
        $this->visualTags = $visualTags;
    }

    public function jsonSerialize(): array
    {
        $data = [
            'activationLink' => $this->activationLink,
            'availableVariables' => count(
                $this->availableVariables
            ) > 0 ? $this->availableVariables : self::FIELD_NOT_SET,
            'blackListedCountries' => $this->blackListedCountries,
            'businessSegment' => $this->businessSegment?->name ?? self::FIELD_NOT_SET,
            'catalogId' => $this->catalogId,
            'codeName' => $this->codeName,
            'customFieldsId' => $this->customFieldsId,
            'customerId' => $this->customerId,
            'dbVersion' => $this->dbVersion,
            'defaultLocale' => $this->defaultLocale,
            'descriptionId' => $this->descriptionId,
            'externalContext' => $this->externalContext,
            'forcedCrossSaleProductIds' => $this->forcedCrossSaleProductIds,
            'fulfillmentTemplate' => $this->fulfillmentTemplate,
            'fulfillmentTemplateName' => $this->fulfillmentTemplateName,
            'genericName' => $this->genericName,
            'lastUpdateReason' => $this->lastUpdateReason,
            'lifeTime' => $this->lifeTime,
            'localizedLongDesc' => $this->localizedLongDesc,
            'localizedShortDesc' => $this->localizedShortDesc,
            'localizedThankYouDesc' => $this->localizedThankYouDesc,
            'marketingName' => $this->marketingName,
            'nextGenerationOf' => $this->nextGenerationOf,
            'originalId' => $this->originalId,
            'paidTrial' => $this->paidTrial,
            'physical' => $this->physical,
            'priceFunction' => $this->priceFunction,
            'prices' => $this->prices,
            'productFamily' => $this->productFamily,
            'publisherProductId' => $this->publisherProductId,
            'publisherRefId' => $this->publisherRefId,
            'relatedContents' => count($this->relatedContents) > 0 ? $this->relatedContents : self::FIELD_NOT_SET,
            'releaseDate' => $this->releaseDate ? $this->releaseDate->format(
                \DateTimeInterface::ATOM
            ) : self::FIELD_NOT_SET,
            'resources' => count($this->resources) > 0 ? $this->resources : self::FIELD_NOT_SET,
            'salesMode' => $this->salesMode?->name ?? self::FIELD_NOT_SET,
            'sellingStores' => $this->sellingStores,
            'status' => $this->status->name ?? self::FIELD_NOT_SET,
            'subscriptionTemplate' => $this->subscriptionTemplate?->name ?? self::FIELD_NOT_SET,
            'taxCode' => $this->taxCode,
            'trialAllowed' => $this->trialAllowed,
            'trialDuration' => $this->trialDuration,
            'type' => $this->type->name ?? self::FIELD_NOT_SET,
            'unifiedRegisterSoftware' => $this->unifiedRegisterSoftware,
            'var' => $this->var,
            'variantOf' => $this->variantOf,
            'visualTags' => $this->visualTags,
        ];

        return $this->filterUnsetFields($data);
    }
}
