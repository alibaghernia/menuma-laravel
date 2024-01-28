<?php

namespace App\Livewire;

use App\Models\CafeRestaurant;
use Livewire\Component;

class CafesonMap extends Component
{
    public $cafes;

    public function mount()
    {
        $this->cafes = CafeRestaurant::where('location_lat', '!=', null)
        ->get();
//        dd($this->cafes);
    }

    public function render()
    {
        return view('livewire.cafeson-map');
    }
}
