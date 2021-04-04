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

//Home
Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index'); // DRY?
//Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::post('/home/emisionCalculator/', 'App\Http\Controllers\HomeController@calculateEmision')->name('home.emisionCalculator');

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

//AdminNotEcoProduct routes
Route::get('/admin/notEcoProduct/show/{id}', 'App\Http\Controllers\Admin\NotEcoProductAdminController@show')->name('admin.notEcoProduct.show');
Route::get('/admin/notEcoProduct/list', 'App\Http\Controllers\Admin\NotEcoProductAdminController@list')->name('admin.notEcoProduct.list');
Route::get('/admin/notEcoProduct/show/{id}/NotFound', 'App\Http\Controllers\Admin\NotEcoProductAdminController@notFound')->name('admin.notEcoProduct.notFound');
Route::get('/admin/notEcoProduct/create', 'App\Http\Controllers\Admin\NotEcoProductAdminController@create')->name('admin.notEcoProduct.create');
Route::get('/admin/notEcoProduct/delete/{id}', 'App\Http\Controllers\Admin\NotEcoProductAdminController@delete')->name("admin.notEcoProduct.delete");
Route::post('/admin/notEcoProduct/save', 'App\Http\Controllers\Admin\NotEcoProductAdminController@save')->name('admin.notEcoProduct.save');

//EcoProduct routes
Route::get('/ecoProduct/show/{id}', 'App\Http\Controllers\EcoProductController@show')->name('ecoProduct.show');
Route::get('/ecoProduct/list', 'App\Http\Controllers\EcoProductController@list')->name('ecoProduct.list');
Route::get('/ecoProduct/show/{id}/NotFound', 'App\Http\Controllers\EcoProductController@notFound')->name('ecoProduct.notFound');

//Admin index
Route::get('/admin', 'App\Http\Controllers\Admin\AdminHomeController@index')->name('admin.home.index');

//AdminEcoProduct routes
Route::get('/admin/ecoProduct/show/{id}', 'App\Http\Controllers\Admin\EcoProductAdminController@show')->name('admin.ecoProduct.show');
Route::get('/admin/ecoProduct/list', 'App\Http\Controllers\Admin\EcoProductAdminController@list')->name('admin.ecoProduct.list');
Route::get('/admin/ecoProduct/show/{id}/NotFound', 'App\Http\Controllers\Admin\EcoProductAdminController@notFound')->name('admin.ecoProduct.notFound');
Route::get('/admin/ecoProduct/create', 'App\Http\Controllers\Admin\EcoProductAdminController@create')->name('admin.ecoProduct.create');
Route::get('/admin/ecoProduct/delete/{id}', 'App\Http\Controllers\Admin\EcoProductAdminController@delete')->name("admin.ecoProduct.delete");
Route::post('/admin/ecoProduct/save', 'App\Http\Controllers\Admin\EcoProductAdminController@save')->name('admin.ecoProduct.save');

//Address routes
Route::get('/address/options', 'App\Http\Controllers\AddressController@options')->name("address.options");
Route::get('/address/create', 'App\Http\Controllers\AddressController@create')->name("address.create");
Route::post('/address/save', 'App\Http\Controllers\AddressController@save')->name("address.save");
Route::get('/address/delete/{id}', 'App\Http\Controllers\AddressController@delete')->name("address.delete");
Route::get('/address/list', 'App\Http\Controllers\AddressController@list')->name("address.list");
Route::get('/address/show/{id}', 'App\Http\Controllers\AddressController@show')->name("address.show");

//SearchBar routes
Route::get('/searchBar/results', 'App\Http\Controllers\SearchBarController@search')->name("searchBar.results");

//Auth routes
Auth::routes();
