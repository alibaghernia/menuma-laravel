<?php

namespace App\Http\Controllers\Web\MainDomain;

use App\Http\Controllers\Controller;
use App\Models\CafeRestaurant;
use App\Models\ConditionalDiscount as Discount;
use App\Models\Event;
use App\Models\SearchLog;
use Illuminate\Http\Request;

class MenumaController extends Controller
{
    public function index()
    {
        $pinnedBusinesses = CafeRestaurant::where('is_pinned', '1')->get();

        $businessesDiscounts = Discount::query()
            ->with(['cafeRestaurant' => function ($query) {
                return $query->select(['id', 'logo_path', 'slug', 'name']);
            }])
//            ->where('is_pinned', '1')
            ->get();

        $businessesEvents = Event::with('cafeRestaurant')
//            todo
            ->where('date', '>=', now()->subDay())
//            ->where('is_pinned', '1')
            ->orderBy('date')
            ->get();

        return view('main_domain.index', compact([
                'pinnedBusinesses',
                'businessesDiscounts',
                'businessesEvents',
            ])
        );
    }

    public function search(Request $request)
    {
        SearchLog::create(['request' => $request->all()]);

        $distance = intval($request->distance) ?: 3000;
        $userLat = floatval($request->lat);
        $userLong = floatval($request->long);

        $businesses = CafeRestaurant::query()
            ->selectRaw('*, (6371000 * ACOS(COS(RADIANS(?)) * COS(RADIANS(location_lat)) * COS(RADIANS(location_long - ?)) + SIN(RADIANS(?)) * SIN(RADIANS(location_lat)))) AS distance')
            ->having('distance', '<', $distance)
            ->addBinding($userLat, 'select')
            ->addBinding($userLong, 'select')
            ->addBinding($userLat, 'select')
            ->orderBy('distance')
            ->get();


        return view('main_domain.search.index', compact([
            'businesses'
        ]));
    }

    public function catalogPage()
    {
        $catalogs = \App\Models\Catalog::all();
        return view('main_domain.catalog.index', compact([
            'catalogs',
        ]));
    }

    public function qrCodeRedirector(string $slug)
    {
        if ($slug == '_A1') {
            return redirect()->away('https://kamakancafe.ir/menu');
        }
        if ($slug == '_A2') {
            return redirect()->away('https://cafeinjast.ir/menu');

        }
        if ($slug == '_A3') {
            return redirect()->away('https://tourismcafe.ir/');
        }
        abort(404);
    }
}
