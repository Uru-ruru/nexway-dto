<?php

namespace Uru\NexWayDTO\Token;

use Uru\NexWayDTO\BaseDtoRequest;
use Uru\NexWayDTO\Enums\GrantType;

class TokenRequest extends BaseDtoRequest
{
    protected string $client_id = self::FIELD_NOT_SET;
    protected string $client_secret = self::FIELD_NOT_SET;
    protected string $realm = self::FIELD_NOT_SET;
    protected string $refresh_token = self::FIELD_NOT_SET;
    protected GrantType $grant_type = GrantType::CLIENT;

    public function setClientId(string $client_id): void
    {
        $this->client_id = $client_id;
    }

    public function setClientSecret(string $client_secret): void
    {
        $this->client_secret = $client_secret;
    }

    public function setRealm(string $realm): void
    {
        $this->realm = $realm;
    }

    public function setGrantType(GrantType $grant_type): void
    {
        $this->grant_type = $grant_type;
    }

    public function setRefreshToken(string $refresh_token): void
    {
        $this->refresh_token = $refresh_token;
    }

    public function jsonSerialize(): array
    {
        $data = [
            'client_id' => $this->client_id,
            'client_secret' => $this->client_secret,
            'realm' => $this->realm,
            'refresh_token' => $this->refresh_token,
            'grant_type' => $this->grant_type->value,
        ];

        return $this->filterUnsetFields($data);
    }
}
