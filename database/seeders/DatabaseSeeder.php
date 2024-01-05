<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\QrCode;
use App\Models\Table;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            FirstInstallSeeder::class,
        ]);
        return;
        Table::create([
            'code' => 'asd',
            'cafe_restaurant_id' => 1,
//            'qr_link' => 'https://menuma.online/demo'
        ]);
        QrCode::create([
            'slug' => '1',
//            'destination' => 'https://menuma.online/',
            'type' => 'part_of_business',
            'meta' => [
                'part' => 'menu',
                'business_id' => 1,
                'specific_parameters' => [
                    'table_id' => 1,
                ],
            ],
            'cafe_restaurant_id' => 1,
        ]);

    }
}
