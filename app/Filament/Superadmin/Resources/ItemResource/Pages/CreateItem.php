<?php

namespace App\Filament\Superadmin\Resources\ItemResource\Pages;

use App\Filament\Superadmin\Resources\ItemResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateItem extends CreateRecord
{
    protected static string $resource = ItemResource::class;
}
