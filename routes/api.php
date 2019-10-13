<?php

use Illuminate\Http\Request;
use App\User;
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


Route::post('/users', 'UserController@store');
// {} => parametro de la ruta
Route::put('/users/{id}','UserController@update');
Route::post('/users/{id}','UserController@destroy')->name('deleteUser');
