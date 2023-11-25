<?php

namespace App\Filament\CafeRestaurant\Resources\CategoryResource\Pages;

use App\Filament\CafeRestaurant\Resources\CategoryResource;
use App\Models\User;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListCategories extends ListRecords
{
    protected static string $resource = CategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

//    protected function getTableQuery(): Builder
//    {
//        return User::query();
//        $q = (new $this->getModel())->query();
//        dd($q);
//
//    }

//public static  function getEloquentQuery
}
