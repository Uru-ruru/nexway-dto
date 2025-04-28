<?php

namespace Uru\NexWayDTO\Enums;

enum GrantType: string
{
    case CLIENT = 'client_credentials';

    case REFRESH = 'refresh_token';
}
