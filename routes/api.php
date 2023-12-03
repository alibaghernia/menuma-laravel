<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
Route::prefix('/cafe-restaurants')->group(function () {
    Route::get('/{slug}',
        [\App\Http\Controllers\Api\CafeRestaurant::class, 'profile']);
    Route::get('/{slug}/menu',
        [\App\Http\Controllers\Api\CafeRestaurant::class, 'menu']);
    Route::get('/{slug}/menu/categories',
        [\App\Http\Controllers\Api\CafeRestaurant::class, 'categories']);
    Route::get('/{slug}/menu/categories/{categoryId}',
        [\App\Http\Controllers\Api\CafeRestaurant::class, 'category']);
    Route::get('/{slug}/menu/items/{itemid}',
        [\App\Http\Controllers\Api\CafeRestaurant::class, 'item']);
    Route::get('/{slug}/menu/day-offers',
        [\App\Http\Controllers\Api\CafeRestaurant::class, 'dayOffers']);
//
//    Route::get('/{slug}/menu/specials',
//        [\App\Http\Controllers\Api\CafeRestaurant::class, 'item']);

});
//Route::get('/cafe-restaurants/{slug}', [\App\Http\Controllers\Api\CafeRestaurant::class, 'profile']);
//Route::get('/cafe-restaurants/{slug}/menu', [\App\Http\Controllers\Api\CafeRestaurant::class, 'menu']);
//Route::get('/cafe-restaurants/{slug}/menu/categories', [\App\Http\Controllers\Api\CafeRestaurant::class, 'categories']);
//Route::get('/cafe-restaurants/{slug}/menu/categories/{categoryId}', [\App\Http\Controllers\Api\CafeRestaurant::class, 'categories']);
