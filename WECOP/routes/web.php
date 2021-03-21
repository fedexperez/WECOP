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

//ecoProduct routes
Route::get('/ecoProduct/show/{id}', 'App\Http\Controllers\EcoProductController@show')->name('ecoProduct.show');
Route::get('/ecoProduct/list', 'App\Http\Controllers\EcoProductController@list')->name('ecoProduct.list');
Route::get('/ecoProduct/show/{id}/NotFound', 'App\Http\Controllers\EcoProductController@notFound')->name('ecoProduct.notFound');

Auth::routes();
