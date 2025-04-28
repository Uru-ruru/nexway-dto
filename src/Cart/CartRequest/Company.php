<?php

namespace Uru\NexWayDTO\Cart\CartRequest;

use Uru\NexWayDTO\BaseDtoRequest;

class Company extends BaseDtoRequest
{
    protected string $apeCode = self::FIELD_NOT_SET;
    protected string $cnpj = self::FIELD_NOT_SET;
    protected string $companyName = self::FIELD_NOT_SET;
    protected string $fullRegistrationNumber = self::FIELD_NOT_SET;
    protected string $registrationNumber = self::FIELD_NOT_SET;

    protected bool $validVatNumber = true;

    protected string $vatNumber = self::FIELD_NOT_SET;

    public function setApeCode(string $apeCode): void
    {
        $this->apeCode = $apeCode;
    }

    public function setCnpj(string $cnpj): void
    {
        $this->cnpj = $cnpj;
    }

    public function setCompanyName(string $companyName): void
    {
        $this->companyName = $companyName;
    }

    public function setFullRegistrationNumber(string $fullRegistrationNumber): void
    {
        $this->fullRegistrationNumber = $fullRegistrationNumber;
    }

    public function setRegistrationNumber(string $registrationNumber): void
    {
        $this->registrationNumber = $registrationNumber;
    }

    public function setValidVatNumber(bool $validVatNumber): void
    {
        $this->validVatNumber = $validVatNumber;
    }

    public function setVatNumber(string $vatNumber): void
    {
        $this->vatNumber = $vatNumber;
    }

    public function jsonSerialize(): array
    {
        $data = [
            'apeCode' => $this->apeCode,
            'cnpj' => $this->cnpj,
            'companyName' => $this->companyName,
            'fullRegistrationNumber' => $this->fullRegistrationNumber,
            'registrationNumber' => $this->registrationNumber,
            'validVatNumber' => $this->validVatNumber,
            'vatNumber' => $this->vatNumber,
        ];

        return $this->filterUnsetFields($data);
    }
}
