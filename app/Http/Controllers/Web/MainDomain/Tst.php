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
use App\Services\Business\BusinessServiceInterface;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

// todo refactor
class Tst extends Controller
{
    public function __construct(
        private readonly BusinessServiceInterface $businessService,
//todo
//        private CafeRestaurant|null               $business,
//        Request                                   $request,

    )
    {
//        todo

//        $this->business = $this->businessService->findByDomain($request->host());
//        if (!$this->business) {
//            todo redirect to main domain
//            abort(404);
//        }
    }

    private function getBusinessBySlug(string $slug)
    {
        $business = $this->businessService->findBySlug($slug);
        if (!$business) {
            abort(404);
        }
        return $business;
    }

    public function profile(string $slug)
    {
        $business = $this->getBusinessBySlug($slug);
        $business->load('workingHours');
//        TODO optimize
        $workingHours = $this->businessService->getTodayWorkingHours($business);
        $hasWorkingTime = $this->businessService->hasAnyWorkingTime($business);
        return view('main_domain.business.profile', compact([
                'business',
                'workingHours',
                'hasWorkingTime',

            ])
        );
    }

    public function menu(string $slug)
    {
        $business = $this->getBusinessBySlug($slug);
        $menu = $this->business->visibleCategories->load('visibleItems');
        $dayOffers = $this->businessService->getDayOffers($this->business);

        return view('main_domain.business.menu', compact([
            'business',
            'menu',
            'dayOffers'
        ]));
    }

    public function registerInCustomerClub(string $slug)
    {
        $business = $this->getBusinessBySlug($slug);
        return view('main_domain.business.customer-club.register', compact([
            'business'
        ]));

    }

    public function conditionalDiscountsList(string $slug)
    {
        $business = $this->getBusinessBySlug($slug);
        $conditionalDiscounts = $this->businessService->getConditionalDiscounts($this->business);
        return view('main_domain.business.conditional-discounts.list', compact([
            'business',
            'conditionalDiscounts',
        ]));
    }

    public function eventsList(string $slug)
    {
        $business = $this->getBusinessBySlug($slug);
        $events = $this->businessService->getFutureEvents($business);
        return view('main_domain.business.events.list', compact([
            'business',
            'events',
        ]));
    }

    public function showItem(string $slug, int $categoryId, int $itemId)
    {
        $business = $this->getBusinessBySlug($slug);
        $item = $this->businessService->getMenuItemById($itemId);
        abort_if(!$item, 404);
        return view('main_domain.business.menu.item', compact([
            'business',
            'item',
        ]));
    }


}
