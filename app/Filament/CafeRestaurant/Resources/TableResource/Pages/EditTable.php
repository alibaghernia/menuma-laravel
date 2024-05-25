<?php

namespace App\Filament\CafeRestaurant\Resources\TableResource\Pages;

use App\Filament\CafeRestaurant\Resources\TableResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

//use Filament\Pages\Actions\Action;
use Filament\Actions\Action;

class EditTable extends EditRecord
{
    protected static string $resource = TableResource::class;

    protected function getActions(): array
    {
        return [];
    }

    protected function getHeaderActions(): array
    {
        return [
//            todo:h implement again
//            Action::make('manage_qr_code')
//                ->label('دریافت QR code')
//                ->url(fn($record): string => route('tables.qr_code', $this->record->id)),
//                ->openUrlInNewTab(),
            Actions\ActionGroup::make([
                Actions\DeleteAction::make(),
            ]),
        ];
    }
}
