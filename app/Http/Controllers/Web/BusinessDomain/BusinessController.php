<?php

namespace App\Http\Controllers\Web\BusinessDomain;

use App\Http\Controllers\Controller;
use App\Models\CafeRestaurant;
use App\Models\CafeRestaurant as CafeModel;
use App\Models\ConditionalDiscount;
use App\Models\Event;
use App\Models\Item;
use App\Models\WorkingHour;
use App\Services\Business\BusinessServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BusinessController extends Controller
{
    public function __construct(
        private readonly BusinessServiceInterface $businessService,
        private CafeRestaurant|null               $business,
        Request                                   $request,

    )
    {

        $this->business = $this->businessService->findByDomain($request->host());
        if (!$this->business) {
//            todo redirect to main domain
            abort(404);
        }
    }

    public function profile()
    {
        $business = $this->business;
        $business->load('workingHours');
//        TODO optimize
        $workingHours = $this->businessService->getTodayWorkingHours($business);
        $hasWorkingTime = $this->businessService->hasAnyWorkingTime($business);
//  todo
        $countOfConditionalDiscounts = $this->businessService->countOfConditionalDiscounts($business);
        $countOfEvents = $this->businessService->countOfEvents($business);
        return view('main_domain.business.profile', compact([
                'business',
                'workingHours',
                'hasWorkingTime',
                'countOfConditionalDiscounts',
                'countOfEvents',
            ])
        );
    }

    public function menu()
    {
        $business = $this->business;
        $menu = $this->business->visibleCategories->load('visibleItems');
        $dayOffers = $this->businessService->getDayOffers($this->business);

        return view('main_domain.business.menu', compact([
            'business',
            'menu',
            'dayOffers'
        ]));
    }

    public function showItem(int $categoryId, int $itemId)
    {
//        dd('jknkjn');
        $business = $this->business;
        $item = Item::where('id', $itemId)
            ->first();
        abort_if(!$item, 404);
        return view('main_domain.business.menu.item', compact([
            'business',
            'item',
        ]));
    }

    public function conditionalDiscountsList()
    {
        $business = $this->business;
        $conditionalDiscounts = $this->businessService->getConditionalDiscounts($this->business);
        return view('main_domain.business.conditional-discounts.list', compact([
            'business',
            'conditionalDiscounts',
        ]));
    }

    public function eventsList()
    {
        $business = $this->business;
        $events = Event::where('cafe_restaurant_id', $business->id)
//            todo
            ->where('date', '>=', now()->subDay())
            ->get();
        return view('main_domain.business.events.list', compact([
            'business',
            'events',
        ]));
    }

    public function registerInCustomerClub()
    {
        $business = $this->business;
        return view('main_domain.business.customer-club.register', compact([
            'business'
        ]));

    }
}
