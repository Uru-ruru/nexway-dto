<?php

namespace Uru\NexWayDTO\Cart;

use Uru\NexWayDTO\BaseDtoResponse;

/**
 * Response example:
 * {
 * "id": "00000000-0000-0000-0000-000000000000",
 * "customerId": "00000000-0000-0000-0000-000000000000",
 * "createDate": 1740504368806,
 * "updateDate": 1740504368806,
 * "dbVersion": 0,
 * "lastUpdateReason": "resource creation thru REST Api",
 * "manualUpdateDate": 1740504368642,
 * "storeId": "00000000-0000-0000-0000-000000000000",
 * "products": [
 * {
 * "publisherRefId": "123456",
 * "id": "00000000-0000-0000-0000-000000000000",
 * "customerId": "00000000-0000-0000-0000-000000000000",
 * "quantityMaxReached": false,
 * "price": {
 * "currency": "USD",
 * "netPrice": 1234.0,
 * "grossPrice": 1234.00,
 * "vatIncluded": false,
 * "vatRate": 0.19,
 * "vatAmount": 123.00,
 * "source": "INTERNAL"
 * },
 * "defaultCurrency": "USD",
 * "unitPrice": {
 * "currency": "USD",
 * "netPrice": 1234.0,
 * "grossPrice": 1234.00,
 * "vatIncluded": false,
 * "vatRate": 0.19,
 * "vatAmount": 123.00,
 * "source": "INTERNAL"
 * },
 * "renewingPrice": {
 * "currency": "USD",
 * "netPrice": 1234.0,
 * "grossPrice": 1234.00,
 * "vatIncluded": false,
 * "vatRate": 0.19,
 * "vatAmount": 123.00,
 * "source": "INTERNAL"
 * },
 * "type": "SOFTWARE",
 * "businessSegment": "B2B",
 * "fullPrice": {
 * "currency": "USD",
 * "netPrice": 1234.0,
 * "grossPrice": 1234.00,
 * "vatIncluded": false,
 * "vatRate": 0.19,
 * "vatAmount": 123.00
 * },
 * "externalContext": "",
 * "lifeTime": "1YEAR",
 * "licenseNextExpirationDate": 1772040368743,
 * "relatedContents": [],
 * "subscriptionTemplate": "NEXWAY_1Y",
 * "variableValues": {},
 * "trial": false,
 * "taxExempt": false,
 * "blackListedCountries": [],
 * "renewingProductDetails": {
 * "lifeTime": "1YEAR",
 * "lifeTimeUnit": "years",
 * "lifeTimeValue": "1"
 * },
 * "quantity": 1,
 * "name": "Product Name",
 * "activationLink": {
 * "enabled": false,
 * "qrCodeDisabled": false
 * },
 * "priceSource": "INTERNAL",
 * "subscriptionProduct": true,
 * "paidTrial": false,
 * "productFamily": "Product Family",,
 * "nextGenerationOf": [],
 * "catalogId": "00000000-0000-0000-0000-000000000000",
 * "descriptionId": "00000000-0000-0000-0000-000000000000",
 * "resources": [],
 * "trialAllowed": false,
 * "unifiedRegisterSoftware": false,
 * "physical": false,
 * "salesMode": "STANDARD",
 * "storeId": "00000000-0000-0000-0000-000000000000",
 * "expirationDate": 1772040368714
 * }
 * ],
 * "locale": "en-US",
 * "country": "DE",
 * "endUser": {
 * "email": "email@mail.com",
 * "maskedEmail": false,
 * "lastName": "LastName",
 * "firstName": "FirstName",,
 * "city": "City",
 * "zipCode": "123456",
 * "country": "DE",
 * "locale": "en-US",
 * "company": {
 * "companyName": "CompanyName",
 * "vatNumber": "123456789",
 * "validVatNumber": false
 * },
 * "taxExemptionEligible": false,
 * "taxExemptionChecked": true,
 * "resellerTaxExemptionEligible": false,
 * "addressError": true
 * },
 * "price": {
 * "currency": "USD",
 * "netPrice": 1234.0,
 * "grossPrice": 1234.00,
 * "vatAmount": 123.00
 * },
 * "currency": "USD",
 * "useCurrencyConversion": true,
 * "availableCurrencies": [
 * "USD"
 * ],
 * "subsidiaryId": "1",
 * "storeHostname": "default.nexway.store",
 * "checkoutUrl": "https://default.nexway.store/checkout/add?cartId=00000000-0000-0000-0000-000000000000",
 * "userAgent": "Runtime",
 * "hideUpSell": false,
 * "hideCrossSell": false,
 * "keepNonRecurringPaymentMethods": false,
 * "taxAuthority": "NX_VATENGINE",
 * "scheduledSuppressionDate": 1740763568642,
 * "promoteOneClickPayment": false,
 * "blockDiscounts": false,
 * "source": "PURCHASE",
 * "useStrikeThroughPrice": false,
 * "eligibleFeatures": {
 * "abandoned": false
 * },
 * "renewalSource": false,
 * "vatNumber": "",
 * "totalAmount": 1234.00
 * }.
 */
class CartResponse extends BaseDtoResponse
{
    protected ?string $id = null;
    protected ?string $checkoutUrl = null;
    protected ?string $totalAmount = null;
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

    public function getCheckoutUrl(): ?string
    {
        return $this->checkoutUrl;
    }

    public function setCheckoutUrl(?string $checkoutUrl): void
    {
        $this->checkoutUrl = $checkoutUrl;
    }

    public function getTotalAmount(): ?string
    {
        return $this->totalAmount;
    }

    public function setTotalAmount(?string $totalAmount): void
    {
        $this->totalAmount = $totalAmount;
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
