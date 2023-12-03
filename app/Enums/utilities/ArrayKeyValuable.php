<?php

namespace App\Enums\utilities;

trait ArrayKeyValuable
{
    public static function arrayKeyValue(string $key, string $value): array
    {
        $result = [];

        foreach (self::cases() as $case) {
            $result[$case->$key()] = $case->$value();
        }
        return $result;
    }

}
