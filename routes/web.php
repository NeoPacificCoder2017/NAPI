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

Route::get('home/users', 'UserController@all');
Route::get('home/users/new', 'UserController@new');
Route::get('home/users/{userId}', 'UserController@show');
Route::post('home/user', 'UserController@create');
Route::get('home/users/{userId}/delete', 'UserController@destroy');

Route::get('home/news', 'NewController@all');
Route::get('home/news/new','NewController@new');
Route::get('home/news/{newsId}', 'NewController@show');
Route::post('home/news','NewController@create');
Route::get('home/news/{newsId}/edit', 'NewController@edit');
Route::patch('home/news/{newsId}/update', 'NewController@update');
Route::get('home/news/{newsId}/delete', 'NewController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
