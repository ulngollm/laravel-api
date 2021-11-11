<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListsController;
use App\Http\Controllers\TodosController;
use App\Http\Controllers\TestController;

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


Route::get('/lists', [ListsController::class, 'getAll']);
Route::post('/lists', [ListsController::class, 'addOne']);
Route::get('/lists/{id}', [ListsController::class, 'getOne']);
Route::put('/lists/{id}', [ListsController::class, 'updateById']);
Route::delete('/lists/{id}', [ListsController::class, 'deleteById']);


Route::get('/todos', [TodosController::class, 'getAll']);
Route::post('/todos', [TodosController::class, 'addOne']);
Route::get('/todos/{id}', [TodosController::class, 'getOne']);
Route::put('/todos/{id}', [TodosController::class, 'updateById']);
Route::delete('/todos/{id}', [TodosController::class, 'deleteById']);

Route::get('/test', [TestController::class, 'getAll']);
Route::post('/test', [TestController::class, 'addOne']);
Route::get('/test/test', [TestController::class, 'test']);
