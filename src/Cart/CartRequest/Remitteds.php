<?php

namespace Uru\NexWayDTO\Cart\CartRequest;

use Uru\NexWayDTO\BaseDtoRequest;

class Remitteds extends BaseDtoRequest
{
    protected string $id = self::FIELD_NOT_SET;
    protected float|string $remittanceAmount = self::FIELD_NOT_SET;
    protected int|string $remittanceRate = self::FIELD_NOT_SET;

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function setRemittanceAmount(float $remittanceAmount): void
    {
        $this->remittanceAmount = $remittanceAmount;
    }

    public function setRemittanceRate(int $remittanceRate): void
    {
        $this->remittanceRate = $remittanceRate;
    }

    public function jsonSerialize(): array
    {
        $data = [
            'id' => $this->id,
            'remittanceAmount' => $this->remittanceAmount,
            'remittanceRate' => $this->remittanceRate,
        ];

        return $this->filterUnsetFields($data);
    }
}
