<?php

namespace Uru\NexWayDTO\Product\ProductRequest;

use Uru\NexWayDTO\BaseDtoRequest;

class PriceByCountryByCurrency extends BaseDtoRequest
{
    protected string $currency = 'USD';
    protected string $country = 'default';
    protected float|string $crossSell = self::FIELD_NOT_SET;
    protected float|string $initialValue = self::FIELD_NOT_SET;
    protected float|string $msrp = self::FIELD_NOT_SET;
    protected float|string $upSell = self::FIELD_NOT_SET;
    protected float|string $value = self::FIELD_NOT_SET;
    protected bool|string $vatIncluded = false;

    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }

    public function setCountry(string $country): void
    {
        $this->country = $country;
    }

    public function setCrossSell(float $crossSell): void
    {
        $this->crossSell = $crossSell;
    }

    public function setInitialValue(float $initialValue): void
    {
        $this->initialValue = $initialValue;
    }

    public function setMsrp(float $msrp): void
    {
        $this->msrp = $msrp;
    }

    public function setUpSell(float $upSell): void
    {
        $this->upSell = $upSell;
    }

    public function setValue(float $value): void
    {
        $this->value = $value;
    }

    public function setVatIncluded(bool $vatIncluded): void
    {
        $this->vatIncluded = $vatIncluded;
    }

    public function jsonSerialize(): array
    {
        $data = [
            $this->currency => [
                $this->country => [
                    'crossSell' => $this->crossSell,
                    'initialValue' => $this->initialValue,
                    'msrp' => $this->msrp,
                    'upSell' => $this->upSell,
                    'value' => $this->value,
                    'vatIncluded' => $this->vatIncluded,
                ],
            ],
        ];

        return $this->filterUnsetFields($data);
    }
}
