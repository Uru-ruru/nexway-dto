<?php

namespace Uru\NexWayDTO\SSO;

use Uru\NexWayDTO\BaseDtoRequest;

class SSORequest extends BaseDtoRequest
{
    protected string $enduserId = self::FIELD_NOT_SET;
    protected string $baseLink = self::FIELD_NOT_SET;
    protected int|string $linkDuration = self::FIELD_NOT_SET;
    protected bool|string $singleUse = self::FIELD_NOT_SET;

    public function setEnduserId(string $enduserId): void
    {
        $this->enduserId = $enduserId;
    }

    public function setBaseLink(string $baseLink): void
    {
        $this->baseLink = $baseLink;
    }

    public function setLinkDuration(int|string $linkDuration): void
    {
        $this->linkDuration = $linkDuration;
    }

    public function setSingleUse(bool|string $singleUse): void
    {
        $this->singleUse = $singleUse;
    }

    public function jsonSerialize(): array
    {
        $data = [
            'enduserId' => $this->enduserId,
            'baseLink' => $this->baseLink,
            'linkDuration' => $this->linkDuration,
            'singleUse' => $this->singleUse,
        ];

        return $this->filterUnsetFields($data);
    }
}
