<?php

namespace Uru\NexWayDTO\Notifications;

use Uru\NexWayDTO\BaseDtoResponse;

/**
 * Request example:
 * {
 * "offerId": 111111,
 * "offerLineId": 2222222,
 * "currency": "USD"
 * }.
 */
class Prices extends BaseDtoResponse
{
    protected ?string $offerId = null;
    protected ?string $offerLineId = null;
    protected ?string $currency = null;

    public function getOfferId(): ?string
    {
        return $this->offerId;
    }

    public function setOfferId(?string $offerId): void
    {
        $this->offerId = $offerId;
    }

    public function getOfferLineId(): ?string
    {
        return $this->offerLineId;
    }

    public function setOfferLineId(?string $offerLineId): void
    {
        $this->offerLineId = $offerLineId;
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function setCurrency(?string $currency): void
    {
        $this->currency = $currency;
    }
}
