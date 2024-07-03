<?php

use App\Http\Controllers\CourierController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::middleware('auth:sanctum')->group(function() {
    Route::apiResource('couriers', CourierController::class)->except(['destroy']);
    Route::post('orders/assign', [OrderController::class, 'assign'])->name('orders.assign');
    Route::post('orders/complete', [OrderController::class, 'complete'])->name('orders.complete');
    Route::apiResource('orders', OrderController::class)->except(['show', 'update', 'destroy']);
//});
