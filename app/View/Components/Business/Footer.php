<?php

namespace App\View\Components\Business;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Footer extends Component
{
    public bool $show;

    public function __construct()
    {
        $this->show = str_contains(request()->host(), 'menuma');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.business.footer', [
            'show' => $this->show
        ]);
    }
}
