<?php

namespace Uru\NexWayDTO\Cart\CartRequest;

use Uru\NexWayDTO\BaseDtoRequest;

class Flags extends BaseDtoRequest
{
    protected bool $productSubstituted = true;

    public function setProductSubstituted(bool $productSubstituted): void
    {
        $this->productSubstituted = $productSubstituted;
    }

    public function jsonSerialize(): array
    {
        $data = [
            'productSubstituted' => $this->productSubstituted,
        ];

        return $this->filterUnsetFields($data);
    }
}
