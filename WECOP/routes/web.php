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

//Review routes
Route::get('/review/show/{id}', 'App\Http\Controllers\ReviewController@show')->name("review.show");
Route::get('/review/create', 'App\Http\Controllers\ReviewController@create')->name("review.create");
Route::get('/review/list', 'App\Http\Controllers\ReviewController@list')->name("review.list");
Route::get('/review/delete/{id}', 'App\Http\Controllers\ReviewController@delete')->name("review.delete");

Route::post('/review/save', 'App\Http\Controllers\ReviewController@save')->name("review.save");

Auth::routes();
