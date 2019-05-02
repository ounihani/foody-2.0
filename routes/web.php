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

Route::get('/', 'StoreController@index');
Route::get('/jannet',function () { return "Hello World"; });
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/stores', 'HomeController@stores')->name('stores');
Route::get('/home/reviews', 'HomeController@reviews')->name('reviews');
Route::get('/home/notifications', 'HomeController@notifications')->name('reviews');
//resources
Route::resource('stores','StoreController');
Route::resource('collections','CollectionController');
Route::resource('categories','CategoriesController');