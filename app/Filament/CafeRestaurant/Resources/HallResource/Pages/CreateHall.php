<?php

namespace App\Filament\CafeRestaurant\Resources\HallResource\Pages;

use App\Filament\CafeRestaurant\Resources\HallResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateHall extends CreateRecord
{
    protected static string $resource = HallResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        $data['cafe_restaurant_id'] = auth()->user()->cafe_restaurant_id;
        return parent::handleRecordCreation($data);
    }
}
