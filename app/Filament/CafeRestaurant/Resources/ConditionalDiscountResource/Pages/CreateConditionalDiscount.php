<?php

namespace App\Filament\CafeRestaurant\Resources\ConditionalDiscountResource\Pages;

use App\Filament\CafeRestaurant\Resources\ConditionalDiscountResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateConditionalDiscount extends CreateRecord
{
    protected static string $resource = ConditionalDiscountResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        $data['cafe_restaurant_id'] = auth()->user()->cafe_restaurant_id;
        return parent::handleRecordCreation($data);
    }
}
