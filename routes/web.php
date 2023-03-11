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
Route::get('/contacts','\App\Http\Controllers\IndexController@contacts')->name('contacts');
Route::get('/payment','\App\Http\Controllers\IndexController@payment')->name('payment');
Route::get('/delivery','\App\Http\Controllers\IndexController@delivery')->name('delivery');
Route::post('/','\App\Http\Controllers\IndexController@search')->name('search');
Route::get('/category/{slug}','\App\Http\Controllers\IndexController@show')->name('category.show');
Route::get('/product/kleyma_po_kozhe', function () {
    return redirect('/category/kleyma_po_kozhe');
});
Route::get('/product/kleyma_po_derevu', function () {
    return redirect('/category/kleyma_po_derevu');
});
Route::get('/product/{slug}','\App\Http\Controllers\ProductController@show')->name('product.show');
Route::get('/sub_product/{slug}','\App\Http\Controllers\ProductController@showSubProduct')->name('product.showSubProduct');
Route::get('/basket-show/product','\App\Http\Controllers\BasketController@show')->name('basket.show');
Route::post('/basket/add-product/{product}','\App\Http\Controllers\BasketController@addProduct')->name('basket.add-product');
Route::post('/basket/add-category/{product}','\App\Http\Controllers\BasketController@addCategory')->name('basket.add-category');
Route::post('/basket/add-product-count/{product}','\App\Http\Controllers\BasketController@addCount')->name('basket.add-product-count');
Route::post('/basket/low-product-count/{product}','\App\Http\Controllers\BasketController@lowCount')->name('basket.low-product-count');
Route::post('/basket/confirm','\App\Http\Controllers\BasketController@confirm')->name('basket.confirm');
Route::get('/basket/confirm/thank_you','\App\Http\Controllers\BasketController@showIsConfirmed')->name('basket.showIsConfirmed');

Auth::routes([
    'reset'=> false,
    'confirm'=> false,
    'verify'=>false,
    'register'=>false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
