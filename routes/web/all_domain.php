<?php

use Illuminate\Support\Facades\Route;

// todo
Route::get('switch-lang/{lang}', function (string $lang) {
    session(['lang' => $lang]);
    return redirect()->back();
});
