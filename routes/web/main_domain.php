<?php

use App\Http\Middleware\IsSuperadmin;
use App\Livewire\QrCodePage;
use Filament\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\Web\MainDomain\Tst::class, 'index']);
Route::get('/{slug}', [\App\Http\Controllers\Web\MainDomain\Tst::class, 'profile'])
    ->name('business.profile');
Route::get('/{slug}/menu', [\App\Http\Controllers\Web\MainDomain\Tst::class, 'menu'])
    ->name('business.menu');
    Route::get('/{slug}/customer_club/register', [\App\Http\Controllers\Web\MainDomain\Tst::class, 'registerInCustomerClub'])
    ->name('business.menu');
