<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::get('order/show/{id}', 'App\Http\Controllers\HomeController@show')->name('order.show');
Route::get('order/list', 'App\Http\Controllers\HomeController@index')->name('order.list');
Route::get('order/return/{id}', 'App\Http\Controllers\HomeController@index')->name('order.return');

Auth::routes();
