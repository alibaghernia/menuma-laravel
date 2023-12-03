<?php

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
//    getimagesize();
//    imagejpeg();
//    Imagick::
//    Intervention\Image\ImageServiceProvider::class
    return redirect()->to('/login');
})->name('login');
