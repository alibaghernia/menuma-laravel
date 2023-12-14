<?php

namespace App\Filament\CafeRestaurant\Resources\TableResource\Pages;

use App\Filament\CafeRestaurant\Resources\TableResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTables extends ListRecords
{
    protected static string $resource = TableResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
