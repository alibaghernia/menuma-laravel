<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Catalog;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index(Request $request)
    {
        return Catalog::all();
    }

    public function show(int $id)
    {
        return Catalog::findOrFail($id);
    }
}
