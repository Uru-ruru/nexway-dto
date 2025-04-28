<?php

namespace Uru\NexWayDTO\Product\ProductRequest;

use Uru\NexWayDTO\BaseDtoRequest;

class RelatedContents extends BaseDtoRequest
{
    protected string $file = self::FIELD_NOT_SET;
    protected string $label = self::FIELD_NOT_SET;

    public function setFile(string $file): void
    {
        $this->file = $file;
    }

    public function setLabel(string $label): void
    {
        $this->label = $label;
    }

    public function jsonSerialize(): array
    {
        $data = [
            'file' => $this->file,
            'label' => $this->label,
        ];

        return $this->filterUnsetFields($data);
    }
}
