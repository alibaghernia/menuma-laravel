<?php

namespace App\Filament\CafeRestaurant\Resources\ItemResource\Pages;

use App\Filament\CafeRestaurant\Resources\ItemResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateItem extends CreateRecord
{
    protected static string $resource = ItemResource::class;
}
