<?php

namespace App\Enums;

use App\Enums\utilities\DefaultUtilities;
use App\Enums\utilities\DefaultUtilitiesInterface;
use App\Enums\utilities\HasLabelInterface;

enum WeekdayEnum: string
    implements DefaultUtilitiesInterface,
    HasLabelInterface
{
    use DefaultUtilities;

    case Saturday = 'saturday';
    case Sunday = 'sunday';
    case Monday = 'monday';
    case Tuesday = 'tuesday';
    case Wednesday = 'wednesday';
    case Thursday = 'thursday';
    case Friday = 'friday';


    public function label(): string
    {
        return match ($this) {
            self::Saturday => 'شنبه',
            self::Sunday => 'یکشنبه',
            self::Monday => 'دوشنبه',
            self::Tuesday => 'سه‌شنبه',
            self::Wednesday => 'چهارشنبه',
            self::Thursday => 'پنجشنبه',
            self::Friday => 'جمعه',
        };
    }
}
