<?php

namespace Uru\NexWayDTO\Enums;

enum SubscriptionTemplate
{
    case NEXWAY_1M;

    case NEXWAY_3M;

    case NEXWAY_6M;

    case NEXWAY_1Y;

    /**
     * @throws \Exception
     */
    public static function getTemplateForLifetime(string $lifetime): SubscriptionTemplate
    {
        return match ($lifetime) {
            '1MONTH' => self::NEXWAY_1M,
            '3MONTH' => self::NEXWAY_3M,
            '6MONTH' => self::NEXWAY_6M,
            '1YEAR' => self::NEXWAY_1Y,
            default => throw new \Exception('Invalid value for subscription lifetime template'),
        };
    }
}
