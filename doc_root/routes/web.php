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

Route::get('articles', 'ArticleController@index');
Route::get('articles/create', 'ArticleController@create');
Route::post('articles/create', 'ArticleController@store');
Route::get('articles/edit/{id}', 'ArticleController@edit');
Route::post('articles/edit', 'ArticleController@update');
Route::get('articles/delete/{id}', 'ArticleController@show');
Route::post('articles/delete', 'ArticleController@delete');
