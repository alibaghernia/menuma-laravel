<?php

namespace Database\Seeders;

use App\Http\Controllers\Api\CafeRestaurant;
use App\Models\Item;
use Illuminate\Database\Seeder;

class MockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $c = CafeRestaurant::fist();
        if (!$c){
            dd('err: cafe does not exist!');
            return;
        }
        for ($i = 0; $i < 10; $i++) {
            Category::create([
                'name' => 'c' . $i,
                'cafe_restaurant_id' => $c->id,
            ]);
        }
        for ($j = 0; $j < 100; $j++) {

//            [["title" => "sdfs", "price" => "24234"], ["title":"sdf","price":"234"]]
            $p = [];
            for ($k = 1; $k <= rand(1, 3); $k++) {
                $p[] = [
                    'id' => $k,
                    "title" => "عنوان" . $k,
                    "price" => (1000 * rand(10, 10)) . ''
                ];
            }
            Item::create([
                'name' => 'i' . $j,
                'description' => 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع',
                'category_id' => rand(1, 9),
                'cafe_restaurant_id' => $c->id,
                'prices' => $p,

            ]);
        }
//        =================================
        $c2 = CafeRestaurant::create([

            'name' => 'کافه 2',
            'logo_path' => 'tgjGf2Mq01oZvcWhH2UlxKeMrhJGyu-metaaW1hZ2VfQXRuWXl1ajdfMTcwMDY4MDU0MzcxN19yYXcuanBn-.jpg',
            'banner_path' => '',
            'slug' => 'daya2',
            'status' => 'active',
//            'social_media' => [],
//            'working_hour1' => '',
//            'working_hour2' => '',
            'address' => 'addressssss',

            'location_lat' => '31.882367',
            'location_long' => '54.397712',
            'description' => 'description',
            'instagram' => 'http://instagram.com/yazdtourismcafe',
            'telegram' => '',
            'twitter' => '',
        ]);

        $userCafeOwner = User::create([
            'name' => 'd2 owner',
            'mobile_number' => '11111111111',
            'password' => '$2y$12$2WNefdG.2a5wSPc5SGtPLOlzxIqXe6DNuUxsI4Dp3POtyhNAKQdey', // password
            'cafe_restaurant_id' => $c2->id,
        ]);

        for ($i2 = 0; $i2 < 10; $i2++) {
            Category::create([
                'name' => '2c' . $i2,
                'cafe_restaurant_id' => $c2->id,
            ]);
        }
        for ($j2 = 0; $j2 < 100; $j2++) {
            Item::create([
                'name' => '2i' . $j2,
                'description' => 'description...',
                'category_id' => rand(10, 19),
                'cafe_restaurant_id' => $c2->id,

            ]);
        }
    }
}
