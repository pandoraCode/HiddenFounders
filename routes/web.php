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


//Route::get('test', 'NBshopsController@getShops');
Route::get('neabyShops', 'NBshopsController@getShops');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/likedShop/{shopId}/{userId}', 'NBshopsController@likeShop');
Route::get('/removeShop/{shopId}/{userId}', 'NBshopsController@removeShop');