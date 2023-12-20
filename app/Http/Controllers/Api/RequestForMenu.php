<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\FormRequest;
use Illuminate\Http\Request;

class RequestForMenu extends Controller
{
    public function store(Request $request)
    {
        return FormRequest::create([
            'name' => $request->name,
            'mobile' => $request->mobile,
        ]);
    }
}
