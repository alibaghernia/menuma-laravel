<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'name',
            'email' => 'admin@admin.com',
            'mobile_number' => '09339675346',
            'password' => '$2y$12$2WNefdG.2a5wSPc5SGtPLOlzxIqXe6DNuUxsI4Dp3POtyhNAKQdey', // password
//            'cafe_restaurant_id' => ,
        ]);
    }
}
