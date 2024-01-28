<?php

namespace App\Filament\CafeRestaurant\Resources\ConditionalDiscountResource\Pages;

use App\Filament\CafeRestaurant\Resources\ConditionalDiscountResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListConditionalDiscounts extends ListRecords
{
    protected static string $resource = ConditionalDiscountResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
