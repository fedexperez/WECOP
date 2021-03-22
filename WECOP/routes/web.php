<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

//Order routes
Route::get('order/show/{id}', 'App\Http\Controllers\OrderController@show')->name('order.show');
Route::get('order/list', 'App\Http\Controllers\OrderController@list')->name('order.list');
Route::get('order/return/{id}', 'App\Http\Controllers\OrderController@return')->name('order.return');

//Review routes
Route::get('/review/show/{id}', 'App\Http\Controllers\ReviewController@show')->name("review.show");
Route::get('/review/create', 'App\Http\Controllers\ReviewController@create')->name("review.create");
Route::get('/review/list', 'App\Http\Controllers\ReviewController@list')->name("review.list");
Route::get('/review/delete/{id}', 'App\Http\Controllers\ReviewController@delete')->name("review.delete");
Route::get('/review/filter/all', 'App\Http\Controllers\ReviewController@all')->name("review.filter");
Route::get('/review/filter/1', 'App\Http\Controllers\ReviewController@oneStar')->name("review.filter1");
Route::get('/review/filter/2', 'App\Http\Controllers\ReviewController@twoStars')->name("review.filter2");
Route::get('/review/filter/3', 'App\Http\Controllers\ReviewController@threeStars')->name("review.filter3");
Route::get('/review/filter/4', 'App\Http\Controllers\ReviewController@fourStars')->name("review.filter4");
Route::get('/review/filter/5', 'App\Http\Controllers\ReviewController@fiveStars')->name("review.filter5");
Route::post('/review/save', 'App\Http\Controllers\ReviewController@save')->name("review.save");

//NotEcoProduct routes
Route::get('/notEcoProduct/show/{id}', 'App\Http\Controllers\NotEcoProductController@show')->name("notEcoProduct.show");
Route::get('/notEcoProduct/list', 'App\Http\Controllers\NotEcoProductController@list')->name("notEcoProduct.list");
Route::get('/notEcoProduct/show/{id}/NotFound', 'App\Http\Controllers\NotEcoProductController@notFound')->name("notEcoProduct.notFound");

//EcoProduct routes
Route::get('/ecoProduct/show/{id}', 'App\Http\Controllers\EcoProductController@show')->name('ecoProduct.show');
Route::get('/ecoProduct/list', 'App\Http\Controllers\EcoProductController@list')->name('ecoProduct.list');
Route::get('/ecoProduct/show/{id}/NotFound', 'App\Http\Controllers\EcoProductController@notFound')->name('ecoProduct.notFound');

//Admin index
Route::get('/admin', 'App\Http\Controllers\Admin\AdminHomeController@index')->name("admin.home.index");

//AdminEcoProduct routes
Route::get('/admin/ecoProduct/show/{id}', 'App\Http\Controllers\Admin\EcoProductAdminController@show')->name('admin.ecoProduct.show');
Route::get('/admin/ecoProduct/list', 'App\Http\Controllers\Admin\EcoProductAdminController@list')->name('admin.ecoProduct.list');
Route::get('/admin/ecoProduct/show/{id}/NotFound', 'App\Http\Controllers\Admin\EcoProductAdminController@notFound')->name('admin.ecoProduct.notFound');
Route::get('/admin/ecoProduct/create', 'App\Http\Controllers\Admin\EcoProductAdminController@create')->name('admin.ecoProduct.create');
Route::get('/admin/ecoProduct/delete/{id}', 'App\Http\Controllers\Admin\EcoProductAdminController@delete')->name("admin.ecoProduct.delete");
Route::post('/admin/ecoProduct/save', 'App\Http\Controllers\Admin\EcoProductAdminController@save')->name('admin.ecoProduct.save');

Auth::routes();
