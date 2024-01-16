<?php

namespace App\Http\Controllers\Api\Business;


use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Business\CustomerClub\RegisterRequest;
use App\Models\CafeRestaurant;
use App\Models\CafeRestaurantCustomer;
use Illuminate\Http\Request;

class CustomerClubController extends Controller
{
    public function register(string $slug, RegisterRequest $request)
    {
        $cafe = CafeRestaurant::where('slug', $slug)->first();
        abort_if(!$cafe, 404, 'the slug of cafe does not exist');
        return CafeRestaurantCustomer::create([
            'name' => $request->name,
            'family' => $request->family,
            'mobile' => $request->mobile,
            'birth_date' => $request->birth_date,
            'gender' => $request->gender,
            'cafe_restaurant_id' => $cafe->id,
        ]);
    }
}
