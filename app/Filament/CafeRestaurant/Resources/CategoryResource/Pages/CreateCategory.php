<?php

namespace App\Filament\CafeRestaurant\Resources\CategoryResource\Pages;

use App\Filament\CafeRestaurant\Resources\CategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCategory extends CreateRecord
{
    protected static string $resource = CategoryResource::class;
}
