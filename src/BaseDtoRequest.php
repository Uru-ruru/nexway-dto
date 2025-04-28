<?php

namespace Uru\NexWayDTO;

class BaseDtoRequest implements DtoRequestInterface
{
    public const FIELD_NOT_SET = 'field_not_set';

    public function __toString(): string
    {
        try {
            return json_encode($this->jsonSerialize(), JSON_THROW_ON_ERROR);
        } catch (\JsonException $e) {
            return $e->getMessage();
        }
    }

    public function jsonSerialize(): array
    {
        return [];
    }

    protected function filterUnsetFields(array $data): array
    {
        foreach ($data as $key => $value) {
            if (is_array($value)) {
                $data[$key] = self::filterUnsetFields($value);
            } elseif (self::FIELD_NOT_SET === $value) {
                unset($data[$key]);
            }
        }

        return $data;
    }
}
