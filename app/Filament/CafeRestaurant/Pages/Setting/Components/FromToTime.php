<?php

namespace App\Filament\CafeRestaurant\Pages\Setting\Components;

use Filament\Forms;

class FromToTime
{
    public static function make(): array
    {
        return [
            Forms\Components\TimePicker::make('from')
                ->label('از ساعت')
                ->required()
                ->seconds(false),
            Forms\Components\TimePicker::make('to')
                ->label('تا ساعت')
                ->required()
                ->seconds(false),
        ];
    }
}
