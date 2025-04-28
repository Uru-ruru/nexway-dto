<?php

namespace Uru\NexWayDTO\ExternalContext;

use Uru\NexWayDTO\BaseDtoRequest;

class ExternalContext extends BaseDtoRequest
{
    protected string $orderId = self::FIELD_NOT_SET;

    /**
     * @var BasketItems[]
     */
    protected array $basketItems = [];

    public function setOrderId(string $orderId): void
    {
        $this->orderId = $orderId;
    }

    public function setBasketItems(array|string $basketItems): void
    {
        $this->basketItems = $basketItems;
    }

    public function addBasketItem(BasketItems $basketItem): void
    {
        $this->basketItems[] = $basketItem;
    }

    public function jsonSerialize(): array
    {
        $data = [
            'orderId' => $this->orderId,
            'basketItems' => count($this->basketItems) > 0 ? $this->basketItems : self::FIELD_NOT_SET,
        ];

        return $this->filterUnsetFields($data);
    }
}
