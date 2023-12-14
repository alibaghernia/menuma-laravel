<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
        Table::create([
            'code' => 'asd',
            'cafe_restaurant_id' => 1,
            'qr_link'=>'https://menuma.online/demo'
        ]);

    }
}
