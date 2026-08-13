<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Auth;

Route::get('/up', fn() => response()->json(['status' => 'ok']));

Route::get('/', [LandingPageController::class, 'index'])->name('home');

Route::get('/tracer', function () {
    return view('tracer');
});

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('dashboard');
