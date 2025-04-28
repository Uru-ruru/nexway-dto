<?php

namespace Uru\NexWayDTO\Cart\CartRequest;

use Uru\NexWayDTO\BaseDtoRequest;

class ConsentFlags extends BaseDtoRequest
{
    protected bool $newsletterOptin = true;

    public function setNewsletterOptin(bool $newsletterOptin): void
    {
        $this->newsletterOptin = $newsletterOptin;
    }

    public function jsonSerialize(): array
    {
        $data = [
            'newsletterOptin' => $this->newsletterOptin,
        ];

        return $this->filterUnsetFields($data);
    }
}
