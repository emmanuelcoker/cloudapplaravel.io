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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/get-rate-update', [App\Http\Controllers\Api\RateController::class, 'index']);
Route::get('/get_server_time', [App\Http\Controllers\Api\TimeController::class, 'index']);
Route::get('/get_raw_server_time', [App\Http\Controllers\Api\TimeController::class, 'raw_time']); //the time is not modified in any way 
Route::get('/get_present_time', [App\Http\Controllers\Api\TimeController::class, 'present_time']);
Route::post('/run-schedule', [App\Http\Controllers\Api\ScheduleController::class, 'index']);



