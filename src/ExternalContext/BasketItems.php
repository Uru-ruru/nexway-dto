<?php

namespace Uru\NexWayDTO\ExternalContext;

use Uru\NexWayDTO\BaseDtoRequest;

class BasketItems extends BaseDtoRequest
{
    protected string $itemId = self::FIELD_NOT_SET;
    protected string $quantity = self::FIELD_NOT_SET;
    protected string $price = self::FIELD_NOT_SET;

    public function setItemId(string $itemId): void
    {
        $this->itemId = $itemId;
    }

    public function setQuantity(string $quantity): void
    {
        $this->quantity = $quantity;
    }

    public function setPrice(string $price): void
    {
        $this->price = $price;
    }

    public function jsonSerialize(): array
    {
        $data = [
            'itemId' => $this->itemId,
            'quantity' => $this->quantity,
            'price' => $this->price,
        ];

        return $this->filterUnsetFields($data);
    }
}
