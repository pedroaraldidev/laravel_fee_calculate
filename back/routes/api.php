<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CodeController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\FeeController;

Route::get('/codes', [CodeController::class, 'getAllCodes']);
Route::get('/plans', [PlanController::class, 'getMinutesPlan']);

Route::get('/calculate/{dddOrigin}/{dddDestination}/{usedMinutes}/{minutesPlan}', [FeeController::class, 'calculateFee']);
Route::get('/price/{dddOrigin}/{dddDestination}', [FeeController::class, 'priceMinute']);


