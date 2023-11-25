<?php

namespace App\Filament\Superadmin\Resources\ManagerResource\Pages;

use App\Filament\Superadmin\Resources\ManagerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditManager extends EditRecord
{
    protected static string $resource = ManagerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
