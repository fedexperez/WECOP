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

//Order routes
Route::get('order/show/{id}', 'App\Http\Controllers\OrderController@show')->name('order.show');
Route::get('order/list', 'App\Http\Controllers\OrderController@list')->name('order.list');
Route::get('order/return/{id}', 'App\Http\Controllers\OrderController@return')->name('order.return');

//Review routes
Route::get('/review/show/{id}', 'App\Http\Controllers\ReviewController@show')->name("review.show");
Route::get('/review/create', 'App\Http\Controllers\ReviewController@create')->name("review.create");
Route::get('/review/list', 'App\Http\Controllers\ReviewController@list')->name("review.list");
Route::get('/review/delete/{id}', 'App\Http\Controllers\ReviewController@delete')->name("review.delete");
Route::post('/review/save', 'App\Http\Controllers\ReviewController@save')->name("review.save");

//AdminNotEcoProduct routes
Route::get('/admin/notEcoProduct/show/{id}', 'App\Http\Controllers\Admin\NotEcoProductAdminController@show')->name("admin.notEcoProduct.show");
Route::get('/admin/notEcoProduct/list', 'App\Http\Controllers\Admin\NotEcoProductAdminController@list')->name("admin.notEcoProduct.list");
Route::get('/admin/notEcoProduct/show/{id}/NotFound', 'App\Http\Controllers\Admin\NotEcoProductAdminController@notFound')->name("admin.notEcoProduct.notFound");
Route::get('/admin/notEcoProduct/create', 'App\Http\Controllers\Admin\NotEcoProductAdminController@create')->name('admin.notEcoProduct.create');
Route::get('/admin/notEcoProduct/delete/{id}', 'App\Http\Controllers\Admin\NotEcoProductAdminController@delete')->name("admin.notEcoProduct.delete");
Route::post('/admin/notEcoProduct/save', 'App\Http\Controllers\Admin\NotEcoProductAdminController@save')->name('admin.notEcoProduct.save');

//EcoProduct routes
Route::get('/ecoProduct/show/{id}', 'App\Http\Controllers\EcoProductController@show')->name('ecoProduct.show');
Route::get('/ecoProduct/list', 'App\Http\Controllers\EcoProductController@list')->name('ecoProduct.list');
Route::get('/ecoProduct/show/{id}/NotFound', 'App\Http\Controllers\EcoProductController@notFound')->name('ecoProduct.notFound');

//AdminEcoProduct routes
Route::get('/admin/ecoProduct/show/{id}', 'App\Http\Controllers\Admin\EcoProductAdminController@show')->name('admin.ecoProduct.show');
Route::get('/admin/ecoProduct/list', 'App\Http\Controllers\Admin\EcoProductAdminController@list')->name('admin.ecoProduct.list');
Route::get('/admin/ecoProduct/show/{id}/NotFound', 'App\Http\Controllers\Admin\EcoProductAdminController@notFound')->name('admin.ecoProduct.notFound');
Route::get('/admin/ecoProduct/create', 'App\Http\Controllers\Admin\EcoProductAdminController@create')->name('admin.ecoProduct.create');
Route::get('/admin/ecoProduct/delete/{id}', 'App\Http\Controllers\Admin\EcoProductAdminController@delete')->name("admin.ecoProduct.delete");
Route::post('/admin/ecoProduct/save', 'App\Http\Controllers\Admin\EcoProductAdminController@save')->name('admin.ecoProduct.save');

Auth::routes();
