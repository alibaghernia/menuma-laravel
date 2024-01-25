<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CafeRestaurant as CafeModel;
use App\Models\Category;
use App\Models\Item;
use App\Models\SearchLog;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class CafeRestaurant extends Controller
{
    private function findBySlug(string $slug)
    {
        $cafe = CafeModel::query()->where('slug', $slug)->first();
        if (!$cafe) {
            abort(404);
        }
        return $cafe;
    }

    public function profile(string $slug)
    {
        $cafe = $this->findBySlug($slug);
        $cafe->load('workingHours');
        $cafe->loadExists(['conditionalDiscounts', 'events']);
        return $cafe;
    }

    public function menu(string $slug)
    {
        $cafe = $this->findBySlug($slug);
//        dd($cafe);
        return $cafe->categories->load('items');
    }

    public function discounts(string $slug)
    {
        $cafe = $this->findBySlug($slug);
//        dd($cafe);
        return $cafe->conditionalDiscounts;
    }

    public function events(Request $request)
    {
        $cafe = $this->findBySlug($request->route()->parameters['slug']);
//        dd($cafe);
        return $cafe->events
            ->when($request->has('from'), function ($q) use ($request) {
                return $q->where('date', '>=', Carbon::parse($request->from));
            })
            ->when($request->has('to'), function ($q) use ($request) {
                return $q->where('date', '<', Carbon::parse($request->to));
            })
            ->load('cafeRestaurant');
    }

    public function manifest(string $slug)
    {
        $cafe = $this->findBySlug($slug);

        $logoExplode = str($cafe->logo_path)->explode('.');
        if (count($logoExplode) != 2) {
            abort(404);
        }
        $logoMemeType = $logoExplode[1];

        return response()->json([
            "id" => $cafe->slug,
            "name" => $cafe->name,
            "icons" => [
                [
                    "src" => config('app.url') . "/storage/{$cafe->logo_path}",
                    "sizes" => "192x192",
                    "type" => "image/$logoMemeType"
                ],
            ],
            "theme_color" => "#FFFFFF",
            "background_color" => "#FFFFFF",
            "start_url" => sprintf("https://%s", $cafe->domain_address),
            "scope" => sprintf("https://%s", $cafe->domain_address),
            "display" => "standalone",
            "orientation" => "portrait"
        ])->header("Content-Type", "application/json");
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


    public function search(Request $request)
    {
//        todo : do not use request date without validation
        SearchLog::create(['request' => $request->all()]);
        $cafeQuery = CafeModel::query()
            ->where('is_hidden', 0);

        if (isset($request->all_fields)) {
            $allFields = $request->all_fields;

            $cafeQuery->where(function ($q) use ($request, $allFields) {
                $q->where('slug', 'like', '%' . $allFields . '%')
                    ->orWhere('name', 'like', '%' . $allFields . '%');
//                    ->orWhere('domain_address', 'like', '%' . $allFields . '%');
            });
        }

        if (isset($request->pin)) {
            $cafeQuery->where('is_pinned', '1');
        }


        if (isset($request->distance)) {
            $distance = intval($request->distance);
            $userLat = floatval($request->lat);
            $userLong = floatval($request->long);
            $cafeQuery
                ->selectRaw('*, (6371000 * ACOS(COS(RADIANS(?)) * COS(RADIANS(location_lat)) * COS(RADIANS(location_long - ?)) + SIN(RADIANS(?)) * SIN(RADIANS(location_lat)))) AS distance')
                ->having('distance', '<', $distance)
                ->addBinding($userLat, 'select')
                ->addBinding($userLong, 'select')
                ->addBinding($userLat, 'select')
                ->orderBy('distance');
        }

        if (isset($request->discounts)) {
            $cafeQuery->withWhereHas('conditionalDiscounts');
        }

        if (isset($request->has_event)) {
            $cafeQuery->withWhereHas('events');
        }
        return $cafeQuery->get();

    }


}
