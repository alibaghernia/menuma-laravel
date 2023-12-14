<?php

namespace App\Filament\CafeRestaurant\Resources\TableResource\Pages;

use App\Filament\CafeRestaurant\Resources\TableResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateTable extends CreateRecord
{
    protected static string $resource = TableResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        $data['cafe_restaurant_id'] = auth()->user()->cafe_restaurant_id;
        return parent::handleRecordCreation($data);

    }
}
