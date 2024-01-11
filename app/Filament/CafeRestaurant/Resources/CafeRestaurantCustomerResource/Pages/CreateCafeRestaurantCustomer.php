<?php

namespace App\Filament\CafeRestaurant\Resources\CafeRestaurantCustomerResource\Pages;

use App\Filament\CafeRestaurant\Resources\CafeRestaurantCustomerResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateCafeRestaurantCustomer extends CreateRecord
{
    protected static string $resource = CafeRestaurantCustomerResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        $data['cafe_restaurant_id'] = auth()->user()->cafe_restaurant_id;
        return parent::handleRecordCreation($data);
    }

}
