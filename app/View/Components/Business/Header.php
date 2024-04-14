<?php

namespace App\View\Components\Business;

use App\Models\CafeRestaurant;
use App\Models\ConditionalDiscount;
use App\Models\Event;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header extends Component
{
    public int $countOfConditionalDiscounts;
    public int $countOfevents;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public CafeRestaurant $business,
        public string         $position,
    )
    {

        $this->countOfConditionalDiscounts = ConditionalDiscount::where('cafe_restaurant_id', $business->id)
            ->count();

        $this->countOfevents = Event::where('cafe_restaurant_id', $business->id)
            ->count();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {

        return view('components.business.header', [
            'business' => $this->business,
            'position' => $this->position,
            'countOfConditionalDiscounts' => $this->countOfConditionalDiscounts,
        ]);
    }
}
