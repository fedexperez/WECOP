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

//NotEcoProduct routes
Route::get('/notEcoProduct/show/{id}', 'App\Http\Controllers\NotEcoProductController@show')->name("notEcoProduct.show");
Route::get('/notEcoProduct/list', 'App\Http\Controllers\NotEcoProductController@list')->name("notEcoProduct.list");
Route::get('/notEcoProduct/show/{id}/NotFound', 'App\Http\Controllers\NotEcoProductController@notFound')->name("notEcoProduct.notFound");

//EcoProduct routes


Auth::routes();
