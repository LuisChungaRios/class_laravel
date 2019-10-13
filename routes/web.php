<?php

Route::get('/users','UserController@index')->name('getUsers');
Route::post('/users','UserController@store')->name('postUsers');
