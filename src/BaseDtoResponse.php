<?php

namespace Uru\NexWayDTO;

use Curl\CaseInsensitiveArray;
use Illuminate\Support\Str;

class BaseDtoResponse implements DtoResponseInterface
{
    private array|CaseInsensitiveArray $data;

    public function __construct(null|array|CaseInsensitiveArray $data = null)
    {
        if (!is_null($data)) {
            $this->data = $data;
            $this->proceedArray($data);
        }
    }

    public function toArray(): array
    {
        return $this->data;
    }

    public function toJson($options = 0): string
    {
        try {
            return json_encode($this->toArray(), JSON_THROW_ON_ERROR | $options);
        } catch (\JsonException $e) {
            return $e->getMessage();
        }
    }

    private function proceedArray(array|CaseInsensitiveArray $data): void
    {
        foreach ($data as $name => $val) {
            if (property_exists($this, $name)) {
                $methodName = 'set'.Str::camel($name);
                if (method_exists($this, $methodName)) {
                    $this->{$methodName}($val);
                }
            } elseif (is_array($val)) {
                $this->proceedArray($val);
            }
        }
    }
}
