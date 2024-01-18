<?php

namespace App\Http\Controllers\Api\Business;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class EventController extends Controller
{
    public function index(Request $request)
    {
        $limit = $request->has('limit') ? intval($request->limit) : null;

//        todo : implement is_pinned
        $query = Event::query()
            ->with('cafeRestaurant')
            ->when($request->has('from') || $request->has('to'), function (Builder $q) use ($request) {
                if ($request->has('from')) {
                    $q->where('date', '>', Carbon::parse($request->from));
                }
                if ($request->has('to')) {
                    $q->where('date', '<', Carbon::parse($request->to));
                }
                return $q;
            })
            ->orderBy('date')
            ->limit($limit);
        return $query
            ->get();
    }

    public function show(int $id)
    {
        $event = Event::where('id', $id)
            ->with('cafeRestaurant')
            ->first();

        abort_if(!$event, 404);
//Carbon::parse()
        return $event;
    }

}
