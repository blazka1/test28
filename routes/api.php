<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarBrandController;
use App\Http\Controllers\CarModelController;
use App\Http\Controllers\CarController;
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

Route::get('car-brands', [CarBrandController::class, 'index']);
Route::get('car-models', [CarModelController::class, 'index']);

Route::get('cars', [CarController::class, 'index']);
Route::post('cars', [CarController::class, 'store']);
Route::get('cars/{id}', [CarController::class, 'show']);
Route::put('cars/{id}', [CarController::class, 'update']);
Route::delete('cars/{id}', [CarController::class, 'destroy']);
