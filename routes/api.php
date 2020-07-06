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

Route::get('todos', 'API\TodoController@index');
Route::post('todo', 'API\TodoController@store');
Route::get('todo/{todo}', 'API\TodoController@show');
Route::put('todo/{todo}', 'API\TodoController@update');
Route::delete('todo/{todo}', 'API\TodoController@destroy');
