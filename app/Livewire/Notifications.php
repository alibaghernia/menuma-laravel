<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;
use Filament\Notifications\Livewire\Notifications as BaseNotifications;

class Notifications extends BaseNotifications
{
public function mount(): void
{
    parent::mount(); // TODO: Change the autogenerated stub
//    dd('ssssssssss');
}
//    public function render()
//    {
//        return view('livewire.notifications');
//    }

    public function render(): View
    {
        return view('livewire.notifications');
    }
}
