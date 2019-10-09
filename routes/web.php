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



Route::get('/', 'HomeController@index')->name('index');

Route::get('/about', 'AbouthController@index')->name('about');

Route::get('/checkout', 'CheckoutController@index')->name('checkout');

Route::get('/contact', 'ContactController@index')->name('contact');

Route::get('/faqs', 'FaqsController@index')->name('faqs');

Route::get('/productdetail', 'ProductdetailController@index')->name('productdetail');

Route::get('/products', 'ProductsController@index')->name('/products/{?id}');

Route::get('/shoppingcart', 'ShoppingcartController@index')->name('shoppingcart');

Auth::routes();