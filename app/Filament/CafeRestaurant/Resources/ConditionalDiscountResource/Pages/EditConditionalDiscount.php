<?php

namespace App\Filament\CafeRestaurant\Resources\ConditionalDiscountResource\Pages;

use App\Filament\CafeRestaurant\Resources\ConditionalDiscountResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditConditionalDiscount extends EditRecord
{
    protected static string $resource = ConditionalDiscountResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
