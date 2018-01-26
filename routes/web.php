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
Route::get('news', 'NewController@all');
Route::get('news/new','NewController@new');
Route::get('news/{newsId}', 'NewController@show');
Route::post('new','NewController@create');
Route::get('news/{newsId}/delete', 'NewController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
