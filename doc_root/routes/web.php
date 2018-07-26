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

/**
 * 全てのルーティングをVue側で行う
 */

Route::get('/{any}', function () {
    return view('layouts.vue_app');
})
->where('any', '.*');


/**
 * Auth
 */

// Auth::routes();
// Route::get('/', 'HomeController@index')->name('home');
// Route::post('/logout', 'Auth\LoginController@logout')->name('logout');


/**
 * Contents
 */

// Route::resource('gears', 'GearController');
// Route::resource('gear_categories', 'GearCategoryController');
// Route::resource('repositories', 'RepositoryController');
// Route::resource('user_groups', 'UserGroupController');
