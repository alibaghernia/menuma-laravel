<?php

namespace App\Filament\CafeRestaurant\Resources\HallResource\Pages;

use App\Filament\CafeRestaurant\Resources\HallResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHall extends EditRecord
{
    protected static string $resource = HallResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
