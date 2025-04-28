<?php

namespace Uru\NexWayDTO\Product\ProductRequest;

use Uru\NexWayDTO\BaseDtoRequest;

class Prices extends BaseDtoRequest
{
    protected string $defaultCurrency = self::FIELD_NOT_SET;
    protected PriceByCountryByCurrency|string $priceByCountryByCurrency = self::FIELD_NOT_SET;

    public function setDefaultCurrency(string $defaultCurrency): void
    {
        $this->defaultCurrency = $defaultCurrency;
    }

    public function setPriceByCountryByCurrency(PriceByCountryByCurrency $priceByCountryByCurrency): void
    {
        $this->priceByCountryByCurrency = $priceByCountryByCurrency;
    }

    public function jsonSerialize(): array
    {
        $data = [
            'defaultCurrency' => $this->defaultCurrency,
            'priceByCountryByCurrency' => $this->priceByCountryByCurrency,
        ];

        return $this->filterUnsetFields($data);
    }
}
