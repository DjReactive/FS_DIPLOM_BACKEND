<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('/logout', [\App\Http\Controllers\Api\AuthController::class, 'logout']);
    Route::post('/me', [\App\Http\Controllers\Api\AuthController::class, 'me']);
    Route::post('/upload', \App\Http\Controllers\Api\UploadController::class);

    Route::apiResource('hall', \App\Http\Controllers\Api\HallController::class);
    Route::apiResource('movie', \App\Http\Controllers\Api\MoviesController::class);
    Route::apiResource('showtime', \App\Http\Controllers\Api\ShowTimeController::class);
    Route::apiResource('settings', \App\Http\Controllers\Api\SettingsController::class);
});

Route::apiResource('tickets', \App\Http\Controllers\Api\TicketsController::class);
Route::post('/tickets/{id}/qrcode', [\App\Http\Controllers\Api\TicketsController::class, 'qrcode']);
Route::get('/hall', [\App\Http\Controllers\Api\HallController::class, 'index']);
Route::get('/movie', [\App\Http\Controllers\Api\MoviesController::class, 'index']);
Route::get('/showtime', [\App\Http\Controllers\Api\ShowTimeController::class, 'index']);

Route::get('settings', [\App\Http\Controllers\Api\SettingsController::class, 'access']);


Route::post('/login', [\App\Http\Controllers\Api\AuthController::class, 'login']);
Route::post('/register', [\App\Http\Controllers\Api\AuthController::class, 'register']);

Route::match(['get', 'post'], '/', function () {
    return 'Not Found';
});
