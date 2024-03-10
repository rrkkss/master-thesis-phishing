<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;

Route::get('/', [IndexController::class, 'index']);
Route::get('/auth', [AuthController::class, 'index']);
Route::post('/auth', [AuthController::class, 'store']);

Route::get('/navod', function () {
    return view('guideline');
});

Route::fallback(function () {
    return redirect('/auth');
});
