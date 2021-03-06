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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/order', 'PagesController@order');
Route::get('/queue', 'PagesController@queue');

Route::resource('orders', 'OrdersController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/menu', 'MenuController@menu');
Route::resource('menu', 'MenuController');
Route::get('/drinks', 'MenuController@drinks');
Route::get('/specials', 'MenuController@specials');
Route::get('/food', 'MenuController@food');