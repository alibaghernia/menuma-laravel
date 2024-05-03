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

    /**
     * Create a new component instance.
     */
    public function __construct(
        public CafeRestaurant $business,
        public string         $position,
    )
    {

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {

        return view('components.business.header', [
            'business' => $this->business,
            'position' => $this->position,
        ]);
    }
}
