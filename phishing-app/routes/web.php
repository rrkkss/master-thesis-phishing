<?php

use App\Helpers\AppHelper;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use Symfony\Component\HttpFoundation\Request;

Route::get('/', [IndexController::class, 'index']);
Route::get('/auth', [AuthController::class, 'index']);
Route::post('/auth', [AuthController::class, 'store']);

Route::get('/navod', function () {
    return view('guideline');
});

Route::fallback(function (Request $request) {
    $params = AppHelper::setParameters($request->get('lang'), $request->get('reset'));
    return redirect('/auth'.$params);
});
