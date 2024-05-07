<?php

namespace App\Filament\CafeRestaurant\Resources\ItemResource\Pages;

use App\Filament\CafeRestaurant\Resources\ItemResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use Filament\Actions;

class CreateItem extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = ItemResource::class;

    protected function handleRecordCreation(array $data): Model
    {
//  "name" => "zzzzzzzzz"
//  "image_path" => "oaqSMwZKGo5B7sNB6GwaUxEPYuzyT7-metaaW1hZ2VfQXRuWXl1ajdfMTcwMDY4MDU0MzcxN19yYXcuanBn-.jpg"
//  "description" => null
//  "category_id" => "2"
//  "prices" => array:2 [▼
//    0 => array:2 [▼
//      "title" => "1"
//      "price" => "1"
//    ]
//    1 => array:2 [▼
//      "title" => "w2"
//      "price" => "22"
//    ]
//  ]
//  "tags" => array:1 [▼
//    0 => "special"
//  ]
//]
        $prices = [];
        $i = 0;
        foreach ($data['prices'] as $p) {
            $i++;
            $prices[] = [
                'id' => $i,
                "title" => $p['title'],
                "price" => $p['price'],
            ];
        }
        $data['prices'] = $prices;
        $data['cafe_restaurant_id'] = auth()->user()->cafe_restaurant_id;


        return parent::handleRecordCreation($data);
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
        ];
    }
}
