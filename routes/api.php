<?php

use App\Http\Controllers\Api\Business\CustomerClubController;
use App\Http\Controllers\Api\Business\EventController;
use App\Http\Controllers\Api\Business\DiscountController;
use App\Http\Controllers\Api\Business\TableController;
use App\Http\Controllers\Api\Business\WaiterPagerController;
use App\Http\Controllers\Api\CafeRestaurant;
use App\Http\Controllers\Api\CatalogController;
use App\Http\Controllers\Api\QrCodeController;
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
//    return $request->user();qqq
//});

Route::prefix('/cafe-restaurants')->group(function () {
    Route::get('/',
        [CafeRestaurant::class, 'search']);

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
    Route::get('/{slug}/discounts',
        [CafeRestaurant::class, 'discounts']);
    Route::get('/{slug}/events',
        [CafeRestaurant::class, 'events']);
    Route::get('/{slug}/manifest.json',
        [CafeRestaurant::class, 'manifest']);
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

    Route::post('/{slug}/customer-club/register',
        [CustomerClubController::class, 'register']);

    Route::get('/{slug}/galleries', function () {
        return \App\Models\CafeRestaurant::where('slug', request()->slug)->first()->galleries;
    });

});
Route::post('/menu-request', [
    \App\Http\Controllers\Api\RequestForMenu::class,
    'store',
]);

// todo
Route::get('/go/_A1', function () {
    return [
        'destination' => 'https://kamakancafe.ir/menu',
    ];
});
Route::get('/go/_A2', function () {
    return [
        'destination' => 'https://cafeinjast.ir/menu',
    ];
});
Route::get('/go/_A3', function () {
    return [
        'destination' => 'https://tourismcafe.ir/',
    ];
});

Route::get('/go/{slug}',
    [QrCodeController::class, 'getDestination']);

// events
Route::prefix('/events')->group(function () {
    Route::get('/',
        [EventController::class, 'index']);
    Route::get('/{id}',
        [EventController::class, 'show']);
});
// discounts
Route::prefix('/discounts')->group(function () {
    Route::get('/',
        [DiscountController::class, 'index']);
    Route::get('/{id}',
        [DiscountController::class, 'show']);
});


// catalogs
Route::prefix('/catalogs')->group(function () {
    Route::get('/',
        [CatalogController::class, 'index']);
    Route::get('/{id}',
        [CatalogController::class, 'show']);
});
// todo
Route::get('{cafe_id}/{status}', function (int $cafeId, int $status) {
    $cafe = \App\Models\CafeRestaurant::find($cafeId);
    $cafe->is_verified = $status;
    $cafe->save();

});
