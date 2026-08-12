<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;

Route::get('/up', fn() => response()->json(['status' => 'ok']));

Route::get('/', [LandingPageController::class, 'index'])->name('home');

Route::get('/tracer', function () {
    return view('tracer');
});
