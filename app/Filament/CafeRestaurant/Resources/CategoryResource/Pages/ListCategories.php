<?php

namespace App\Filament\CafeRestaurant\Resources\CategoryResource\Pages;

use App\Filament\CafeRestaurant\Resources\CategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCategories extends ListRecords
{
    protected static string $resource = CategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
