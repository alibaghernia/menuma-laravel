<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CafeRestaurant as CafeModel;
use App\Models\Category;
use App\Models\Item;

class CafeRestaurant extends Controller
{
    private function findBySlug(string $slug)
    {
        $cafe = CafeModel::where('slug', $slug)->first();
        if (!$cafe) {
            abort(404);
        }
        return $cafe;
    }

    public function profile(string $slug)
    {
        $cafe = $this->findBySlug($slug);
        $cafe->load('workingHours');
        return $cafe;
    }

    public function menu(string $slug)
    {
        $cafe = $this->findBySlug($slug);
//        dd($cafe);
        return $cafe->categories->load('items');
    }

    public function categories(string $slug)
    {
        $cafe = $this->findBySlug($slug);
        return $cafe->categories;
    }

    public function category(string $slug, int $categoryId)
    {

        $cafe = $this->findBySlug($slug);
        $category = Category::findOrFail($categoryId);
        abort_if($cafe->id !== $category->cafe_restaurant_id,
            404);
        return $category->with('items');

    }

    public function item(string $slug, int $itemId)
    {
//        dd('asdsa');
//        $cafe = $this->findBySlug($slug);
        return Item::findOrFail($itemId);
//        if ($item->cafe_restaurant_id !== $cafe->cafe_restaurant_id) {
//            abort(404);
//        }
//        return $item;
    }

    public function dayOffers(string $slug)
    {
        $cafe = $this->findBySlug($slug);

        return Item::where('cafe_restaurant_id', $cafe->id)
            ->whereJsonContains('tags', 'day_offer')
            ->get();
    }




}
