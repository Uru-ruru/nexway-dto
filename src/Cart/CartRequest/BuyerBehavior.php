<?php

namespace Uru\NexWayDTO\Cart\CartRequest;

use Uru\NexWayDTO\BaseDtoRequest;

class BuyerBehavior extends BaseDtoRequest
{
    protected bool $abandonedCart = true;
    protected bool $renewal = true;
    protected bool $retainBuyer = true;

    public function setAbandonedCart(bool $abandonedCart): void
    {
        $this->abandonedCart = $abandonedCart;
    }

    public function setRenewal(bool $renewal): void
    {
        $this->renewal = $renewal;
    }

    public function setRetainBuyer(bool $retainBuyer): void
    {
        $this->retainBuyer = $retainBuyer;
    }

    public function jsonSerialize(): array
    {
        $data = [
            'abandonedCart' => $this->abandonedCart,
            'renewal' => $this->renewal,
            'retainBuyer' => $this->retainBuyer,
        ];

        return $this->filterUnsetFields($data);
    }
}
