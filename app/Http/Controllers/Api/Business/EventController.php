<?php

namespace App\Http\Controllers\Api\Business;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(Request $request)
    {
        $limit = $request->has('limit') ? intval($request->limit) : null;

//        todo : implement is_pinned

        return Event::with('cafeRestaurant')
            ->orderBy('date')
            ->limit($limit)
            ->get();
    }
}
