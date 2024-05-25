<?php

// todo use controller
Route::get('/pager-requests/{table_id}', function (int $tableId) {
    $business = \App\Models\CafeRestaurant::where('domain_address', request()->host())
        ->firstOrFail();
    $table = \App\Models\Table::where('cafe_restaurant_id', $business->id)
        ->where('id', $tableId)
        ->firstOrFail();
    $pagerRequest = \App\Models\PagerRequest::create([
        'cafe_restaurant_id' => $business->id,
        'table_id' => $table->id,
        'status' => 'open',
    ]);

    return $pagerRequest;
});
