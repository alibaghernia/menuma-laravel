<?php

namespace App\Http\Controllers\Api\Business;

use App\Http\Controllers\Controller;
use App\Models\CafeRestaurant as CafeModel;
use App\Models\Table;
use Illuminate\Http\Request;


class TableController extends Controller
{
    private function findBySlug(string $slug)
    {
        $cafe = CafeModel::where('slug', $slug)->first();
        if (!$cafe) {
            abort(404);
        }
        return $cafe;
    }


    /**
     * Display a listing of the resource.
     */
    public function index(string $slug)
    {
        $cafe = $this->findBySlug($slug);

        return $cafe->tables;

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug, string $id)
    {
        $table = Table::find($id);
        abort_if(!$table, 404);
        return $table;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
