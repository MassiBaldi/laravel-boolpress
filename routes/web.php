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

Route::get('/', 'HomeController@index');

Route::get('/posts/category', 'HomeController@indexByCategory')->name('home.indexByCategory');

Auth::routes();

Route::middleware('auth')->prefix('admin')->namespace('Admin')->name('admin.')->group(function(){

  Route::get('/', 'HomeController@index')->name('home')->middleware('auth');

  Route::resource('/posts', 'PostController');

});
