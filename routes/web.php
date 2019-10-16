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



Route::get('/checkout', 'CheckoutController@index')->name('checkout');

Route::get('/contact', 'ContactController@index')->name('contact');

Route::get('/faqs', 'FaqsController@index')->name('faqs');

Route::get('/productdetail/{id?}', 'ProductdetailController@index')->name('productdetail');

Route::get('/products', 'ProductsController@index')->name('products');

Route::get('/shoppingcart', 'ShoppingcartController@index')->name('shoppingcart');

Route::post('/comment', 'PostController@addComment');

Auth::routes();