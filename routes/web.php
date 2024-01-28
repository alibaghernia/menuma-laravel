<?php

use App\Http\Middleware\IsSuperadmin;
use App\Livewire\QrCodePage;
use Filament\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// todo middleware and group route, ...
Route::get('/superadmin/login-as/{user}', function (\App\Models\User $user) {

    if (!auth()->user()->hasRole(\App\Models\Role::SUPERADMIN)) {
        abort(403);
    }
    auth()->logout();
    session()->regenerate();
    auth()->loginUsingId($user->id);
    session()->regenerate();
    return redirect()->to('/');

});
Route::get('/l', function () {
    return redirect()->to('/login');
})->name('login');

Route::middleware(['auth'])->group(function () {
    Route::get('tables/{table_id}/qr-code', QrCodePage::class)
        ->name('tables.qr_code');
});
//Route::get('/q/{slug}',
//    [QrCodeController::class, 'goTo']);

Route::get('/on-map', \App\Livewire\CafesonMap::class)
    ->middleware([
        Authenticate::class,
        IsSuperadmin::class,
    ]);
