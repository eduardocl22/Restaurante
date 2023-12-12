<?php

use Illuminate\Http\Request;
use App\Http\Controllers\dishesController;
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

Route::get('dishes',[DishesController::class, 'apiIndex']);

Route::get('dishes/{dish}', [DishesController::class, 'apiEdit']);

Route::post('dishes/update/{dish}', [DishesController::class, 'apiUpdate']);

Route::delete('dishes/delete/{dish}', [DishesController::class,'apiDelete']);

Route::post('/dishes/create', [DishesController::class, 'apiCreate']);