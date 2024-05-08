<?php

namespace App\Http\Controllers\Web\MainDomain;

use App\Http\Controllers\Controller;
use App\Models\CafeRestaurant;
use App\Models\CafeRestaurant as CafeModel;
use App\Models\Category;
use App\Models\ConditionalDiscount;
use App\Models\ConditionalDiscount as Discount;
use App\Models\Event;
use App\Models\Item;
use App\Models\SearchLog;
use App\Models\WorkingHour;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

// todo refactor
class Tst extends Controller
{
    public function index()
    {
        $pinnedBusinesses = CafeRestaurant::where('is_pinned', '1')->get();

        $businessesDiscounts = Discount::query()
            ->with(['cafeRestaurant' => function ($query) {
                return $query->select(['id', 'logo_path', 'slug', 'name']);
            }])
//            ->where('is_pinned', '1')
            ->get();

        $businessesEvents = Event::with('cafeRestaurant')
//            todo
            ->where('date', '>=', now()->subDay())
//            ->where('is_pinned', '1')
            ->orderBy('date')
            ->get();

        return view('main_domain.index', compact([
                'pinnedBusinesses',
                'businessesDiscounts',
                'businessesEvents',
            ])
        );
    }

    public function profile(string $slug)
    {
        $business = CafeModel::query()->where('slug', $slug)->firstOrFail();
//        $cafe = $this->findBySlug($slug);
        $business->load('workingHours');
//        dd($business->workingHours);
//        TODO optimize
        $todayName = strtolower(now()->format('l'));
        $workingHours = WorkingHour::where('cafe_restaurant_id', $business->id)
            ->where('weekday', $todayName)
            ->orderBy('from')
            ->get();
        $hasWorkingTime = boolval(WorkingHour::where('cafe_restaurant_id', $business->id)
            ->count());

//        $business->loadExists(['conditionalDiscounts', 'events']);
//  todo
        $countOfConditionalDiscounts = ConditionalDiscount::where('cafe_restaurant_id', $business->id)
            ->count();

        $countOfEvents = Event::where('cafe_restaurant_id', $business->id)
            ->count();
        return view('main_domain.business.profile', compact([
                'business',
                'workingHours',
                'hasWorkingTime',
                'countOfConditionalDiscounts',
                'countOfEvents',
            ])
        );
    }

    public function menu(string $slug)
    {
        $business = CafeModel::query()->where('slug', $slug)->firstOrFail();
        $menu = $business->categories->load('visibleItems');
        $dayOffers = Item::where('cafe_restaurant_id', $business->id)
            ->whereJsonContains('tags', 'day_offer')
            ->get();
        return view('main_domain.business.menu', compact([
            'business',
            'menu',
            'dayOffers'
        ]));
    }

    public function registerInCustomerClub(string $slug)
    {
        $business = CafeModel::query()->where('slug', $slug)->firstOrFail();
        return view('main_domain.business.customer-club.register', compact([
            'business'
        ]));

    }

    public function conditionalDiscountsList(string $slug)
    {
        $business = CafeModel::query()->where('slug', $slug)->firstOrFail();
        $conditionalDiscounts = ConditionalDiscount::where('cafe_restaurant_id', $business->id)->get();
        return view('main_domain.business.conditional-discounts.list', compact([
            'business',
            'conditionalDiscounts',
        ]));
    }

    public function eventsList(string $slug)
    {
        $business = CafeModel::query()->where('slug', $slug)->firstOrFail();
        $events = Event::where('cafe_restaurant_id', $business->id)
//            todo
            ->where('date', '>=', now()->subDay())
            ->get();
        return view('main_domain.business.events.list', compact([
            'business',
            'events',
        ]));
    }

    public function showItem(string $slug, int $categoryId, int $itemId)
    {
        $business = CafeModel::query()->where('slug', $slug)->firstOrFail();
        $item = Item::where('id', $itemId)
            ->first();
        abort_if(!$item, 404);
        return view('main_domain.business.menu.item', compact([
            'business',
            'item',
        ]));
    }

    public function search(Request $request)
    {
        SearchLog::create(['request' => $request->all()]);

        $distance = intval($request->distance) ?: 3000;
        $userLat = floatval($request->lat);
        $userLong = floatval($request->long);

        $businesses = CafeRestaurant::query()
            ->selectRaw('*, (6371000 * ACOS(COS(RADIANS(?)) * COS(RADIANS(location_lat)) * COS(RADIANS(location_long - ?)) + SIN(RADIANS(?)) * SIN(RADIANS(location_lat)))) AS distance')
            ->having('distance', '<', $distance)
            ->addBinding($userLat, 'select')
            ->addBinding($userLong, 'select')
            ->addBinding($userLat, 'select')
            ->orderBy('distance')
            ->get();

        return view('main_domain.search.index', compact([
            'businesses'
        ]));
    }
}
