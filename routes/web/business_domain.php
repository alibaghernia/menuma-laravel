<?php

use App\Http\Controllers\Web\BusinessDomain;
use Illuminate\Support\Facades\Route;

Route::get('/',
    [BusinessDomain\BusinessController::class, 'profile'])
    ->name('profile');

Route::get('/menu',
    [BusinessDomain\BusinessController::class, 'menu'])
    ->name('menu');

//Route::get('/menu/{categoryId}/{itemId}',
//    [MainDomain\Tst::class, 'showItem'])
//    ->name('menu.item');

Route::get('/menu/{categoryId}/{itemId}',
    [BusinessDomain\BusinessController::class, 'showItem'])
    ->name('menu.item');

Route::get('/discounts',
    [BusinessDomain\BusinessController::class, 'conditionalDiscountsList'])
    ->name('conditional-discounts');

Route::get('/events',
    [BusinessDomain\BusinessController::class, 'eventsList'])
    ->name('events');

Route::get('/customer_club/register',
    [BusinessDomain\BusinessController::class, 'registerInCustomerClub'])
    ->name('customer-club.register');

Route::get('/panel', function () {
    return redirect()->away('https://' . config('app.domains.panel'));
})
    ->name('panel');
