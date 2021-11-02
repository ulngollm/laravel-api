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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/user', function () {
    return ['name' => 'ully'];
});
Route::get('/user/{id}', function ($id) {
    return array(
        'id' => $id,
        'name' => 'name'
    );
});
Route::get('/group', function () {
    return array(
        array(
            'id' => 1,
            'name' => 'admin'
        ),
        array(
            'id' => 2,
            'name' => 'managers'
        ),
    );
});

Route::get('/group/{id}', function ($id) {
    return
        array(
            'id' => $id,
            'name' => 'admin'
        );
});
