<?php

namespace App\Services\Business;

use App\Models\CafeRestaurant as CafeModel;
use App\Models\ConditionalDiscount;
use App\Models\Event;
use App\Models\Item;
use App\Models\WorkingHour;

class BusinessService implements BusinessServiceInterface
{

    public function findBySlug(string $slug)
    {
        return CafeModel::where('slug', $slug)->first();
    }

    public function findByDomain(string $domain)
    {
        return CafeModel::where('domain_address', $domain)->first();
    }

    public function getTodayWorkingHours(CafeModel $business)
    {
        $todayName = strtolower(now()->format('l'));
        return WorkingHour::where('cafe_restaurant_id', $business->id)
            ->where('weekday', $todayName)
            ->orderBy('from')
            ->get();
    }

    public function hasAnyWorkingTime(CafeModel $business)
    {
        return boolval(WorkingHour::where('cafe_restaurant_id', $business->id)
            ->count());
    }

    public function countOfConditionalDiscounts(CafeModel $business)
    {
        return ConditionalDiscount::where('cafe_restaurant_id', $business->id)
            ->count();
    }

    public function countOfEvents(CafeModel $business)
    {
        return Event::where('cafe_restaurant_id', $business->id)
            ->count();
    }

    public function getDayOffers(CafeModel $business)
    {
        return Item::where('cafe_restaurant_id', $business->id)
            ->whereJsonContains('tags', 'day_offer')
            ->get();
    }

    public function getConditionalDiscounts(CafeModel $business)
    {
        return ConditionalDiscount::where('cafe_restaurant_id', $business->id)->get();
    }

}
