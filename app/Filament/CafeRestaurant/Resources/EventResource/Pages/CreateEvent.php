<?php

namespace App\Filament\CafeRestaurant\Resources\EventResource\Pages;

use App\Filament\CafeRestaurant\Resources\EventResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateEvent extends CreateRecord
{
    protected static string $resource = EventResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        $data['cafe_restaurant_id'] = auth()->user()->cafe_restaurant_id;
        return parent::handleRecordCreation($data);
    }
}
