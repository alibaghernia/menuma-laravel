<?php

namespace App\Livewire;

use App\Models\CafeRestaurant;
use Livewire\Component;

class CafesonMap extends Component
{
    public $cafes;

    public function mount()
    {
        $query = CafeRestaurant::where('location_lat', '!=', null)
            ->where('is_hidden', 0);
        if (request()->has('verified')) {
            $query->where('is_verified', intval(request()->verified));
        }
        $this->cafes = $query->get();
    }

    public function render()
    {
        return view('livewire.cafeson-map');
    }
}
