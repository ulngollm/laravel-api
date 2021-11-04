<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListsController;
use App\Http\Controllers\NotesController;
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


Route::get('/notes', [NotesController::class, 'getAll']);
Route::post('/notes', [NotesController::class, 'addOne']);
Route::get('/notes/{id}', [NotesController::class, 'getOne']);
Route::put('/notes/{id}', [NotesController::class, 'updateById']);
Route::delete('/notes/{id}', [NotesController::class, 'deleteById']);

