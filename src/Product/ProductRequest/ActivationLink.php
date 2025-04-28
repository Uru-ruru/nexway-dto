<?php

namespace Uru\NexWayDTO\Product\ProductRequest;

use Uru\NexWayDTO\BaseDtoRequest;

class ActivationLink extends BaseDtoRequest
{
    protected bool|string $enabled = true;
    protected string $providerId = self::FIELD_NOT_SET;
    protected bool|string $qrCodeDisabled = false;

    public function setEnabled(bool $enabled = true): void
    {
        $this->enabled = $enabled;
    }

    public function setProviderId(string $providerId): void
    {
        $this->providerId = $providerId;
    }

    public function setQrCodeDisabled(bool $qrCodeDisabled): void
    {
        $this->qrCodeDisabled = $qrCodeDisabled;
    }

    public function jsonSerialize(): array
    {
        $data = [
            'enabled' => $this->enabled,
            'providerId' => $this->providerId,
            'qrCodeDisabled' => $this->qrCodeDisabled,
        ];

        return $this->filterUnsetFields($data);
    }
}
