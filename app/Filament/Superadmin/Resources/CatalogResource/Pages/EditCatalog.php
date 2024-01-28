<?php

namespace App\Filament\Superadmin\Resources\CatalogResource\Pages;

use App\Filament\Superadmin\Resources\CatalogResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCatalog extends EditRecord
{
    protected static string $resource = CatalogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
