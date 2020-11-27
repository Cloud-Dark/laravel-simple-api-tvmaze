<?php

use Illuminate\Http\Request;
Route::POST('carifilm', 'App\Http\Controllers\CarifilmController@carifilm');




Route::get('users', 'App\Http\Controllers\UserController@users');
// Route::get('/users', 'App\Http\Controllers\UserController@users');
Route::POST('auth/register', 'App\Http\Controllers\AuthController@register');
Route::POST('auth/login', 'App\Http\Controllers\AuthController@login');
