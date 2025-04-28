<?php

namespace Uru\NexWayDTO\Product\ProductRequest;

use Uru\NexWayDTO\BaseDtoRequest;

class DefaultCurrency extends BaseDtoRequest
{
    protected string $currencyCode = self::FIELD_NOT_SET;
    protected int|string $defaultFractionDigits = self::FIELD_NOT_SET;
    protected string $displayName = self::FIELD_NOT_SET;
    protected int|string $numericCode = self::FIELD_NOT_SET;
    protected string $numericCodeAsString = self::FIELD_NOT_SET;
    protected string $symbol = self::FIELD_NOT_SET;

    public function setCurrencyCode(string $currencyCode): void
    {
        $this->currencyCode = $currencyCode;
    }

    public function setDefaultFractionDigits(int $defaultFractionDigits): void
    {
        $this->defaultFractionDigits = $defaultFractionDigits;
    }

    public function setDisplayName(string $displayName): void
    {
        $this->displayName = $displayName;
    }

    public function setNumericCode(int $numericCode): void
    {
        $this->numericCode = $numericCode;
    }

    public function setNumericCodeAsString(string $numericCodeAsString): void
    {
        $this->numericCodeAsString = $numericCodeAsString;
    }

    public function setSymbol(string $symbol): void
    {
        $this->symbol = $symbol;
    }

    public function jsonSerialize(): array
    {
        $data = [
            'currencyCode' => $this->currencyCode,
            'defaultFractionDigits' => $this->defaultFractionDigits,
            'displayName' => $this->displayName,
            'numericCode' => $this->numericCode,
            'numericCodeAsString' => $this->numericCodeAsString,
            'symbol' => $this->symbol,
        ];

        return $this->filterUnsetFields($data);
    }
}
