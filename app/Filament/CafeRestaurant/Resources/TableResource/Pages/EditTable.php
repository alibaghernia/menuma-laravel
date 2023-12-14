<?php

namespace App\Filament\CafeRestaurant\Resources\TableResource\Pages;

use App\Filament\CafeRestaurant\Resources\TableResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTable extends EditRecord
{
    protected static string $resource = TableResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
