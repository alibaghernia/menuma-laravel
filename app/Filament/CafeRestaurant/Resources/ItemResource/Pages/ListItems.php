<?php

namespace App\Filament\CafeRestaurant\Resources\ItemResource\Pages;

use App\Filament\CafeRestaurant\Resources\ItemResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListItems extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = ItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
