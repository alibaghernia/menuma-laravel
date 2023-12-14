<?php

use App\Http\Controllers\Api\Business\TableController;
use App\Http\Controllers\Api\Business\WaiterPagerController;
use App\Http\Controllers\Api\CafeRestaurant;
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
        [CafeRestaurant::class, 'profile']);
    Route::get('/{slug}/menu',
        [CafeRestaurant::class, 'menu']);
    Route::get('/{slug}/menu/categories',
        [CafeRestaurant::class, 'categories']);
    Route::get('/{slug}/menu/categories/{categoryId}',
        [CafeRestaurant::class, 'category']);
    Route::get('/{slug}/menu/items/{itemid}',
        [CafeRestaurant::class, 'item']);
    Route::get('/{slug}/menu/day-offers',
        [CafeRestaurant::class, 'dayOffers']);
//
    Route::get('/{slug}/tables',
        [TableController::class, 'index']);

    Route::get('/{slug}/tables/{table_id}',
        [TableController::class, 'show']);
//

    Route::post('/{slug}/waiter_pager/{table_id}/call',
        [WaiterPagerController::class, 'call']);
    Route::post('/{slug}/waiter_pager/{table_id}/cancel',
        [WaiterPagerController::class, 'cancel']);

//
//    Route::get('/{slug}/menu/specials',
//        [\App\Http\Controllers\Api\CafeRestaurant::class, 'item']);

});
//Route::get('/cafe-restaurants/{slug}', [\App\Http\Controllers\Api\CafeRestaurant::class, 'profile']);
//Route::get('/cafe-restaurants/{slug}/menu', [\App\Http\Controllers\Api\CafeRestaurant::class, 'menu']);
//Route::get('/cafe-restaurants/{slug}/menu/categories', [\App\Http\Controllers\Api\CafeRestaurant::class, 'categories']);
//Route::get('/cafe-restaurants/{slug}/menu/categories/{categoryId}', [\App\Http\Controllers\Api\CafeRestaurant::class, 'categories']);
