<?php

namespace App\Filament\Superadmin\Resources\CatalogResource\Pages;

use App\Filament\Superadmin\Resources\CatalogResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCatalogs extends ListRecords
{
    protected static string $resource = CatalogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
