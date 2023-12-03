<?php

namespace App\Filament\CafeRestaurant\Pages\Setting\Components;

use Filament\Forms\Components\TextInput;

class SocialNetwork
{
    public static function make($name, $label)
    {
        return TextInput::make($name)
            ->label($label)
            ->url();
    }
}
