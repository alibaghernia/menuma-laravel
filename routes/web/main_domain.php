<?php

use App\Http\Controllers\Web\MainDomain;
use App\Http\Middleware\IsSuperadmin;
use App\Livewire\QrCodePage;
use Filament\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;


Route::get('/',
    [MainDomain\Tst::class, 'index'])
    ->name('home');

// todo
Route::get('/catalog', function () {
    $catalogs = \App\Models\Catalog::all();
    return view('main_domain.catalog.index', compact([
        'catalogs',
    ]));
})
    ->name('catalog');

Route::get('/register-form', \App\Livewire\MainDomain\RegisterForm::class)
    ->name('register-form');

//todo
Route::get('/q/{slug}', function ($slug) {
    if ($slug == '_A1') {
        return redirect()->away('https://kamakancafe.ir/menu');
    }
    if ($slug == '_A2') {
        return redirect()->away('https://cafeinjast.ir/menu');

    }
    if ($slug == '_A3') {
        return redirect()->away('https://menuma.online/tourismcafe/menu');
    }
    abort(404);
});


//
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

        Route::get('/panel', function () {
            return redirect()->away('https://' . config('app.domains.panel'));
        })
            ->name('panel');
    });
