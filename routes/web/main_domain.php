<?php

use App\Http\Controllers\Web\MainDomain;
use App\Http\Middleware\IsSuperadmin;
use App\Livewire\QrCodePage;
use Filament\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;


Route::get('/',
    [MainDomain\Tst::class, 'index'])
    ->name('home');

Route::name('business.')
    ->prefix('/{slug}')
    ->group(function () {
        Route::get('/',
            [MainDomain\Tst::class, 'profile'])
            ->name('profile');

        Route::get('/menu',
            [MainDomain\Tst::class, 'menu'])
            ->name('menu');

        Route::get('/menu/{categoryId}/{itemId}',
            [MainDomain\Tst::class, 'showItem'])
            ->name('menu.item');

        Route::get('/customer_club/register',
            [MainDomain\Tst::class, 'registerInCustomerClub'])
            ->name('customer-club.register');

        Route::get('/discounts',
            [MainDomain\Tst::class, 'conditionalDiscountsList'])
            ->name('conditional-discounts');
//todo
        Route::get('/events',
            [MainDomain\Tst::class, 'eventsList'])
            ->name('events');
    });
