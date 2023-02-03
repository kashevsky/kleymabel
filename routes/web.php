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

Route::get('/','\App\Http\Controllers\IndexController@index')->name('index');
Route::get('/{category}','\App\Http\Controllers\IndexController@show')->name('category.show');
Route::get('/product/{product}','\App\Http\Controllers\ProductController@show')->name('product.show');
Route::get('/subproduct/{subProduct}','\App\Http\Controllers\SubProductController@show')->name('subproduct.show');
Route::get('/basket-show/1/2/3/4','\App\Http\Controllers\BasketController@show')->name('basket.show');
Route::post('/basket/add-product/{product}','\App\Http\Controllers\BasketController@addProduct')->name('basket.add-product');
Route::post('/basket/add-product-count/{product}','\App\Http\Controllers\BasketController@addCount')->name('basket.add-product-count');
Route::post('/basket/low-product-count/{product}','\App\Http\Controllers\BasketController@lowCount')->name('basket.low-product-count');
Route::post('/basket/add-subproduct/{subProduct}','\App\Http\Controllers\BasketController@addSubProduct')->name('basket.add-subProduct');
