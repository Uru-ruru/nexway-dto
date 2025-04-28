<?php

namespace Uru\NexWayDTO\Product\ProductRequest;

use Uru\NexWayDTO\BaseDtoRequest;

class Resource extends BaseDtoRequest
{
    protected string $url = self::FIELD_NOT_SET;

    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    public function jsonSerialize(): array
    {
        $data = [
            'url' => $this->url,
        ];

        return $this->filterUnsetFields($data);
    }
}
