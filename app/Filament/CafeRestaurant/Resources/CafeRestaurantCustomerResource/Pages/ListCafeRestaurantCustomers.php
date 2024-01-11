<?php

namespace App\Filament\CafeRestaurant\Resources\CafeRestaurantCustomerResource\Pages;

use App\Filament\CafeRestaurant\Resources\CafeRestaurantCustomerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCafeRestaurantCustomers extends ListRecords
{
    protected static string $resource = CafeRestaurantCustomerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
