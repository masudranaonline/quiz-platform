<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/**
 * Auth Routes
 */
Route::group(['prefix' => 'auth'], function () {
    Route::post('login', \App\Http\Controllers\API\Auth\LoginController::class);
    Route::post('register', \App\Http\Controllers\API\Auth\RegisterController::class);
    Route::post('forgot-password', \App\Http\Controllers\API\Auth\ForgotPasswordController::class);
    Route::post('reset-password', \App\Http\Controllers\API\Auth\ResetPasswordController::class);
});



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
