<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('users', 'UserController@all');
Route::get('user/new', 'UserController@new');
Route::get('user/{userId}', 'UserController@show');
Route::post('user', 'UserController@create');
Route::get('user/{userId}/delete', 'UserController@destroy');
//Route::get('users', 'UserController@all');