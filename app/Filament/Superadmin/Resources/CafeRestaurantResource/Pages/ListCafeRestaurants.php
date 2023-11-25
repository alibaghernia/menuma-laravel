<?php

namespace App\Filament\Superadmin\Resources\CafeRestaurantResource\Pages;

use App\Filament\Superadmin\Resources\CafeRestaurantResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCafeRestaurants extends ListRecords
{
    protected static string $resource = CafeRestaurantResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
