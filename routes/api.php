<?php

use App\Http\Controllers\GroupController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

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


Route::get('/user', [OrderController::class, 'test']);

Route::get('/user/{id}', [OrderController::class, 'getOne']);

Route::get('/group', [GroupController::class, 'getAll']);

Route::get('/group/{id}',  [GroupController::class, 'getOne']);
