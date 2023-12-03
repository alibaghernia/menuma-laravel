<?php

namespace App\Filament\CafeRestaurant\Pages\Setting\Components;

use Filament\Forms;

class RepeaterOfFromToTime
{
    public static function make(string $name, string $label)
    {
        return Forms\Components\Repeater::make($name)
            ->label($label)
            ->schema(FromToTime::make())
            ->maxItems(2)
            ->columns(2);
    }
}
