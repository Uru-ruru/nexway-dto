<?php

namespace Uru\NexWayDTO\Product\ProductRequest;

use Uru\NexWayDTO\BaseDtoRequest;
use Uru\NexWayDTO\Enums\VariableType;

class AvailableVariables extends BaseDtoRequest
{
    protected mixed $defaultValue = self::FIELD_NOT_SET;
    protected string $field = self::FIELD_NOT_SET;
    protected string $internalDesc = self::FIELD_NOT_SET;
    protected mixed $labels = self::FIELD_NOT_SET;
    protected mixed $localizedValue = self::FIELD_NOT_SET;
    protected ?VariableType $type = null;
    protected mixed $value = self::FIELD_NOT_SET;

    public function setDefaultValue(mixed $defaultValue): void
    {
        $this->defaultValue = $defaultValue;
    }

    public function setField(string $field): void
    {
        $this->field = $field;
    }

    public function setInternalDesc(string $internalDesc): void
    {
        $this->internalDesc = $internalDesc;
    }

    public function setLabels(mixed $labels): void
    {
        $this->labels = $labels;
    }

    public function setLocalizedValue(mixed $localizedValue): void
    {
        $this->localizedValue = $localizedValue;
    }

    public function setType(?VariableType $type): void
    {
        $this->type = $type;
    }

    public function setValue(mixed $value): void
    {
        $this->value = $value;
    }

    public function jsonSerialize(): array
    {
        $data = [
            'defaultValue' => $this->defaultValue,
            'field' => $this->field,
            'internalDesc' => $this->internalDesc,
            'labels' => $this->labels,
            'localizedValue' => $this->localizedValue,
            'type' => $this->type?->name ?? self::FIELD_NOT_SET,
            'value' => $this->value,
        ];

        return $this->filterUnsetFields($data);
    }
}
