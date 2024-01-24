<?php

namespace App\Http\Controllers\Api\Business;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ConditionalDiscount as Discount;
use Spatie\QueryBuilder\QueryBuilder;

class DiscountController extends Controller
{
    public function index(Request $request)
    {
        $limit = isset($request->limit) ? intval($request->limit) : null;

        $query = Discount::query()
            ->with(['cafeRestaurant' => function ($query) {
                return $query->select(['id', 'logo_path', 'slug', 'name']);
            }])
            ->when($request->has('is_pinned'), function ($query) {
                return $query->where('is_pinned', '1');
            })
            ->limit($limit);

        return $query->get();
    }
    public function show(int $id)
    {
        return Discount::query()
            ->where('id', '=', $id)
            ->with(['cafeRestaurant' => function ($query) {
                return $query->select(['id', 'logo_path', 'slug', 'name']);
            }])
            ->first();
    }
}
