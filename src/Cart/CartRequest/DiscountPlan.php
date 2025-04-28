<?php

namespace Uru\NexWayDTO\Cart\CartRequest;

use Uru\NexWayDTO\BaseDtoRequest;

class DiscountPlan extends BaseDtoRequest
{
    protected int|string $discountStep = self::FIELD_NOT_SET;
    protected bool|string $ignorePurchaseDiscount = self::FIELD_NOT_SET;
    protected string $tag = self::FIELD_NOT_SET;

    public function setDiscountStep(int $discountStep): void
    {
        $this->discountStep = $discountStep;
    }

    public function setIgnorePurchaseDiscount(bool $ignorePurchaseDiscount): void
    {
        $this->ignorePurchaseDiscount = $ignorePurchaseDiscount;
    }

    public function setTag(string $tag): void
    {
        $this->tag = $tag;
    }

    public function jsonSerialize(): array
    {
        $data = [
            'discountStep' => $this->discountStep,
            'ignorePurchaseDiscount' => $this->ignorePurchaseDiscount,
            'tag' => $this->tag,
        ];

        return $this->filterUnsetFields($data);
    }
}
