<?php

namespace Uru\NexWayDTO\EndUser\EndUserResponse;

use Uru\NexWayDTO\BaseDtoResponse;

/**
 * Response example:
 * {
 * "id":"00000000-0000-0000-0000-000000000000",
 * "customerId":"00000000-0000-0000-0000-000000000000",
 * "enduserId":"00000000-0000-0000-0000-000000000000",
 * "createDate":1746190400342,
 * "updateDate":1746190400342,
 * "dbVersion":0,
 * "lastUpdateReason":"resource creation thru REST Api",
 * "accountCreated":false,
 * "email":"mail@email.com",
 * "country":"CY",
 * "zipCode":"3065",
 * "status":"ENABLED",
 * "type":"BUYER",
 * "firstName":"name",
 * "lastName":"lastName",
 * "city":"Limassol",
 * "locale":"en-US",
 * "streetAddress":"address",
 * "consumerType":"company",
 * "company":
 * {
 * "companyName":"companyName",,
 * "vatNumber":"231231231231",
 * "validVatNumber":false},
 * "phone":"+123123123",
 * "taxExemptionEligible":false,
 * "resellerTaxExemptionEligible":false,
 * "token":"00000000000000",
 * "storeId":"00000000-0000-0000-0000-000000000000",
 * "storeRoute":
 * {"fullUrl":"https:\/\/default.nexway.store",
 * "hostname":"default.nexway.store",
 * "url":"default"
 * },
 * "userName":"mail@email.com",
 * "fullName":"name lastName",,
 * "taxExemptionChecked":false,
 * "usingShippingAddress":false,
 * "addressError":false,
 * "maskedEmail":false,
 * "validVatNumber":false,
 * "availableCities":["\u039b\u03b5\u03bc\u03b5\u03c3\u03cc\u03c2","Lemesos"],
 * "accountExists":false
 * }
 */
class EndUserItem extends BaseDtoResponse
{
    protected ?string $id = null;
    protected ?string $customerId = null;
    protected ?string $enduserId = null;
    protected ?int $createDate = null;
    protected ?int $updateDate = null;
    protected ?int $dbVersion = null;
    protected ?string $lastUpdateReason = null;
    protected ?bool $accountCreated = null;
    protected ?string $email = null;
    protected ?string $country = null;
    protected ?string $zipCode = null;
    protected ?string $status = null;
    protected ?string $type = null;
    protected ?string $firstName = null;
    protected ?string $lastName = null;
    protected ?string $city = null;
    protected ?string $locale = null;
    protected ?string $streetAddress = null;
    protected ?string $consumerType = null;
    protected ?array $company = null;
    protected ?string $phone = null;
    protected ?bool $taxExemptionEligible = null;
    protected ?bool $resellerTaxExemptionEligible = null;
    protected ?string $token = null;
    protected ?string $storeId = null;
    protected ?array $storeRoute = null;
    protected ?string $userName = null;
    protected ?string $fullName = null;
    protected ?bool $taxExemptionChecked = null;
    protected ?bool $usingShippingAddress = null;
    protected ?bool $addressError = null;
    protected ?bool $maskedEmail = null;
    protected ?bool $validVatNumber = null;
    protected ?array $availableCities = null;
    protected ?bool $accountExists = null;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }

    public function setCustomerId(?string $customerId): void
    {
        $this->customerId = $customerId;
    }

    public function getEnduserId(): ?string
    {
        return $this->enduserId;
    }

    public function setEnduserId(?string $enduserId): void
    {
        $this->enduserId = $enduserId;
    }

    public function getCreateDate(): ?int
    {
        return $this->createDate;
    }

    public function setCreateDate(?int $createDate): void
    {
        $this->createDate = $createDate;
    }

    public function getUpdateDate(): ?int
    {
        return $this->updateDate;
    }

    public function setUpdateDate(?int $updateDate): void
    {
        $this->updateDate = $updateDate;
    }

    public function getDbVersion(): ?int
    {
        return $this->dbVersion;
    }

    public function setDbVersion(?int $dbVersion): void
    {
        $this->dbVersion = $dbVersion;
    }

    public function getLastUpdateReason(): ?string
    {
        return $this->lastUpdateReason;
    }

    public function setLastUpdateReason(?string $lastUpdateReason): void
    {
        $this->lastUpdateReason = $lastUpdateReason;
    }

    public function getAccountCreated(): ?bool
    {
        return $this->accountCreated;
    }

    public function setAccountCreated(?bool $accountCreated): void
    {
        $this->accountCreated = $accountCreated;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }

    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    public function setZipCode(?string $zipCode): void
    {
        $this->zipCode = $zipCode;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): void
    {
        $this->firstName = $firstName;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(?string $lastName): void
    {
        $this->lastName = $lastName;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): void
    {
        $this->city = $city;
    }

    public function getLocale(): ?string
    {
        return $this->locale;
    }

    public function setLocale(?string $locale): void
    {
        $this->locale = $locale;
    }

    public function getStreetAddress(): ?string
    {
        return $this->streetAddress;
    }

    public function setStreetAddress(?string $streetAddress): void
    {
        $this->streetAddress = $streetAddress;
    }

    public function getConsumerType(): ?string
    {
        return $this->consumerType;
    }

    public function setConsumerType(?string $consumerType): void
    {
        $this->consumerType = $consumerType;
    }

    public function getCompany(): ?array
    {
        return $this->company;
    }

    public function setCompany(?array $company): void
    {
        $this->company = $company;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): void
    {
        $this->phone = $phone;
    }

    public function getTaxExemptionEligible(): ?bool
    {
        return $this->taxExemptionEligible;
    }

    public function setTaxExemptionEligible(?bool $taxExemptionEligible): void
    {
        $this->taxExemptionEligible = $taxExemptionEligible;
    }

    public function getResellerTaxExemptionEligible(): ?bool
    {
        return $this->resellerTaxExemptionEligible;
    }

    public function setResellerTaxExemptionEligible(?bool $resellerTaxExemptionEligible): void
    {
        $this->resellerTaxExemptionEligible = $resellerTaxExemptionEligible;
    }

    public function getToken(): ?string
    {
        return $this->token;
    }

    public function setToken(?string $token): void
    {
        $this->token = $token;
    }

    public function getStoreId(): ?string
    {
        return $this->storeId;
    }

    public function setStoreId(?string $storeId): void
    {
        $this->storeId = $storeId;
    }

    public function getStoreRoute(): ?array
    {
        return $this->storeRoute;
    }

    public function setStoreRoute(?array $storeRoute): void
    {
        $this->storeRoute = $storeRoute;
    }

    public function getUserName(): ?string
    {
        return $this->userName;
    }

    public function setUserName(?string $userName): void
    {
        $this->userName = $userName;
    }

    public function getFullName(): ?string
    {
        return $this->fullName;
    }

    public function setFullName(?string $fullName): void
    {
        $this->fullName = $fullName;
    }

    public function getTaxExemptionChecked(): ?bool
    {
        return $this->taxExemptionChecked;
    }

    public function setTaxExemptionChecked(?bool $taxExemptionChecked): void
    {
        $this->taxExemptionChecked = $taxExemptionChecked;
    }

    public function getUsingShippingAddress(): ?bool
    {
        return $this->usingShippingAddress;
    }

    public function setUsingShippingAddress(?bool $usingShippingAddress): void
    {
        $this->usingShippingAddress = $usingShippingAddress;
    }

    public function getAddressError(): ?bool
    {
        return $this->addressError;
    }

    public function setAddressError(?bool $addressError): void
    {
        $this->addressError = $addressError;
    }

    public function getMaskedEmail(): ?bool
    {
        return $this->maskedEmail;
    }

    public function setMaskedEmail(?bool $maskedEmail): void
    {
        $this->maskedEmail = $maskedEmail;
    }

    public function getValidVatNumber(): ?bool
    {
        return $this->validVatNumber;
    }

    public function setValidVatNumber(?bool $validVatNumber): void
    {
        $this->validVatNumber = $validVatNumber;
    }

    public function getAvailableCities(): ?array
    {
        return $this->availableCities;
    }

    public function setAvailableCities(?array $availableCities): void
    {
        $this->availableCities = $availableCities;
    }

    public function getAccountExists(): ?bool
    {
        return $this->accountExists;
    }

    public function setAccountExists(?bool $accountExists): void
    {
        $this->accountExists = $accountExists;
    }
}
