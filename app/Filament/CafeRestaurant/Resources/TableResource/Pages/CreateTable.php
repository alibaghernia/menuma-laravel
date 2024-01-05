<?php

namespace App\Filament\CafeRestaurant\Resources\TableResource\Pages;

use App\Filament\CafeRestaurant\Resources\TableResource;
use App\Models\QrCode;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class CreateTable extends CreateRecord
{
    protected static string $resource = TableResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        $slug = '_' . chr(rand(65, 90)) . QrCode::count();
        $data['cafe_restaurant_id'] = auth()->user()->cafe_restaurant_id;
        $record = parent::handleRecordCreation($data);

        $qrCode = QrCode::create([
            'slug' => $slug,
            'type' => 'part_of_business',
            'meta' => [
                'part' => 'menu',
                'business_id' => auth()->user()->cafe_restaurant_id,
                'specific_parameters' => [
                    'table_id' => $record->id
                ]
            ],
            'cafe_restaurant_id' => auth()->user()->cafe_restaurant_id,
        ]);

        $record->qr_code_id = $qrCode->id;
        $record->save();

        return $record;
    }
}
