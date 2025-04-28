<?php

namespace Uru\NexWayDTO\Cart\CartRequest;

use Uru\NexWayDTO\BaseDtoRequest;

class EndUser extends BaseDtoRequest
{
    protected bool|string $anonymousEndUser = self::FIELD_NOT_SET;
    protected string $birthDate = self::FIELD_NOT_SET;
    protected string $city = self::FIELD_NOT_SET;
    protected Company|string $company = self::FIELD_NOT_SET;
    protected string $consumerType = self::FIELD_NOT_SET;
    protected string $country = self::FIELD_NOT_SET;
    protected string $cpf = self::FIELD_NOT_SET;
    protected string $email = self::FIELD_NOT_SET;
    protected string $encryptedEmail = self::FIELD_NOT_SET;
    protected string $firstName = self::FIELD_NOT_SET;
    protected string $lastName = self::FIELD_NOT_SET;
    protected string $locale = self::FIELD_NOT_SET;
    protected bool|string $maskedEmail = self::FIELD_NOT_SET;
    protected string $phone = self::FIELD_NOT_SET;
    protected string $recipientCode = self::FIELD_NOT_SET;
    protected string $region = self::FIELD_NOT_SET;
    protected bool|string $resellerTaxExemptionEligible = self::FIELD_NOT_SET;
    protected string $streetAddress = self::FIELD_NOT_SET;
    protected bool|string $taxExemptionChecked = self::FIELD_NOT_SET;
    protected bool|string $taxExemptionEligible = self::FIELD_NOT_SET;
    protected bool|string $validVatNumber = self::FIELD_NOT_SET;
    protected string $title = self::FIELD_NOT_SET;
    protected string $zipCode = self::FIELD_NOT_SET;

    public function setAnonymousEndUser(bool $anonymousEndUser): void
    {
        $this->anonymousEndUser = $anonymousEndUser;
    }

    public function setBirthDate(string $birthDate): void
    {
        $this->birthDate = $birthDate;
    }

    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    public function setCompany(Company $company): void
    {
        $this->company = $company;
    }

    public function setConsumerType(string $consumerType): void
    {
        $this->consumerType = $consumerType;
    }

    public function setCountry(string $country): void
    {
        $this->country = $country;
    }

    public function setCpf(string $cpf): void
    {
        $this->cpf = $cpf;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function setEncryptedEmail(string $encryptedEmail): void
    {
        $this->encryptedEmail = $encryptedEmail;
    }

    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    public function setLocale(string $locale): void
    {
        $this->locale = $locale;
    }

    public function setMaskedEmail(bool $maskedEmail): void
    {
        $this->maskedEmail = $maskedEmail;
    }

    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    public function setRecipientCode(string $recipientCode): void
    {
        $this->recipientCode = $recipientCode;
    }

    public function setRegion(string $region): void
    {
        $this->region = $region;
    }

    public function setResellerTaxExemptionEligible(bool $resellerTaxExemptionEligible): void
    {
        $this->resellerTaxExemptionEligible = $resellerTaxExemptionEligible;
    }

    public function setStreetAddress(string $streetAddress): void
    {
        $this->streetAddress = $streetAddress;
    }

    public function setTaxExemptionChecked(bool $taxExemptionChecked): void
    {
        $this->taxExemptionChecked = $taxExemptionChecked;
    }

    public function setTaxExemptionEligible(bool $taxExemptionEligible): void
    {
        $this->taxExemptionEligible = $taxExemptionEligible;
    }

    public function setValidVatNumber(bool $validVatNumber): void
    {
        $this->validVatNumber = $validVatNumber;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function setZipCode(string $zipCode): void
    {
        $this->zipCode = $zipCode;
    }

    public function jsonSerialize(): array
    {
        $data = [
            'anonymousEndUser' => $this->anonymousEndUser,
            'birthDate' => $this->birthDate,
            'city' => $this->city,
            'company' => $this->company,
            'consumerType' => $this->consumerType,
            'country' => $this->country,
            'cpf' => $this->cpf,
            'email' => $this->email,
            'encryptedEmail' => $this->encryptedEmail,
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'locale' => $this->locale,
            'maskedEmail' => $this->maskedEmail,
            'phone' => $this->phone,
            'recipientCode' => $this->recipientCode,
            'region' => $this->region,
            'resellerTaxExemptionEligible' => $this->resellerTaxExemptionEligible,
            'streetAddress' => $this->streetAddress,
            'taxExemptionChecked' => $this->taxExemptionChecked,
            'taxExemptionEligible' => $this->taxExemptionEligible,
            'validVatNumber' => $this->validVatNumber,
            'title' => $this->title,
            'zipCode' => $this->zipCode,
        ];

        return $this->filterUnsetFields($data);
    }
}
