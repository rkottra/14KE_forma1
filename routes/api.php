<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EredmenyController;
use App\Http\Controllers\PilotaController;
use App\Http\Controllers\VersenyController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('eredmeny', EredmenyController::class);
Route::resource('verseny', VersenyController::class);
Route::resource('pilota', PilotaController::class)->only([
    'index', 'show'
]);;
