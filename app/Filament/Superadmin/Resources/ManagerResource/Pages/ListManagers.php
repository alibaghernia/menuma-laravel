<?php

namespace App\Filament\Superadmin\Resources\ManagerResource\Pages;

use App\Filament\Superadmin\Resources\ManagerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListManagers extends ListRecords
{
    protected static string $resource = ManagerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
