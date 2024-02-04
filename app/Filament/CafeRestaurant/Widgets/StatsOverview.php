<?php

namespace App\Filament\CafeRestaurant\Widgets;

use App\Models\CafeRestaurantCustomer;
use App\Models\Item;
use Filament\Infolists\Components\IconEntry\IconEntrySize;
use Filament\Support\Colors\Color;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $stats = [];
        $cafe = auth()->user()->cafeRestaurant;
        $soldOutCount = Item::where('cafe_restaurant_id', $cafe->id)
            ->whereJsonContains('tags', 'sold_out')
            ->count();
        if ($soldOutCount) {
            $stats[] = Stat::make('تعداد آیتم های تمام شده', "$soldOutCount");
        }

        $customerClubCount = CafeRestaurantCustomer::where('cafe_restaurant_id', $cafe->id)->count();
        return array_merge($stats, [
            Stat::make('اعضا باشگاه مشتریان', $customerClubCount . ' نفر '),
        ]);
    }
}
