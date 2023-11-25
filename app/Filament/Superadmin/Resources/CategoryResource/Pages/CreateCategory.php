<?php

namespace App\Filament\Superadmin\Resources\CategoryResource\Pages;

use App\Filament\Superadmin\Resources\CategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCategory extends CreateRecord
{
    protected static string $resource = CategoryResource::class;
}
