<?php

use Illuminate\Http\Request;

Route::get('users',  "UsersController@getUsers");
Route::post('users',  "UsersController@createUser");