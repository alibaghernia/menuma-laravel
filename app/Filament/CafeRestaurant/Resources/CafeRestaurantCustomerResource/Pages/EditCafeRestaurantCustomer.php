<?php

namespace App\Filament\CafeRestaurant\Resources\CafeRestaurantCustomerResource\Pages;

use App\Filament\CafeRestaurant\Resources\CafeRestaurantCustomerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCafeRestaurantCustomer extends EditRecord
{
    protected static string $resource = CafeRestaurantCustomerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
