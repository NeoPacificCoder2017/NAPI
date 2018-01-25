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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('comments','newCommentController@all');
Route::get('comments/edit','newCommentController@edit');
Route::get('comments/new','newCommentController@new');
Route::get('comments/{messageId}','newCommentController@show');
Route::post('comment','newCommentController@create');
