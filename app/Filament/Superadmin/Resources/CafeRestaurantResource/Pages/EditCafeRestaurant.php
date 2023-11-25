<?php

namespace App\Filament\Superadmin\Resources\CafeRestaurantResource\Pages;

use App\Filament\Superadmin\Resources\CafeRestaurantResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCafeRestaurant extends EditRecord
{
    protected static string $resource = CafeRestaurantResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
