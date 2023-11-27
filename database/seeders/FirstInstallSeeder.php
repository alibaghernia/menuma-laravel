<?php

namespace Database\Seeders;

use App\Models\CafeRestaurant;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class FirstInstallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roleSuperadmin = Role::create([
            'name' => Role::SUPERADMIN,
        ]);
        $userSuperadmin = User::create([
            'name' => 'superadmin',
            'mobile_number' => '64357693390',
            'password' => '$2y$12$2WNefdG.2a5wSPc5SGtPLOlzxIqXe6DNuUxsI4Dp3POtyhNAKQdey', // password
//            'cafe_restaurant_id' => ,
        ]);

        $userSuperadmin->assignRole($roleSuperadmin);
        $demoCafe = CafeRestaurant::create([
            'name' => 'کافه دمو',
            'slug' => 'demo',
            'status' => 'active',
            'has_pager' => true,
        ]);
    }
}
