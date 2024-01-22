<?php

namespace App\Filament\Superadmin\Resources\EventResource\Pages;

use App\Filament\Superadmin\Resources\EventResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateEvent extends CreateRecord
{
    protected static string $resource = EventResource::class;
}
