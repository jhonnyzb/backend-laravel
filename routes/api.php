<?php

use App\Http\Controllers\HotelController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/greeting', function () {
    return 'Hello Worldddd';
});

Route::prefix('admin-hotels')->group(function () {
    // Public routes
    Route::post('create-hotel', [HotelController::class, 'createHotel']);
    Route::get('hotels', [HotelController::class, 'getHotels']);

});
