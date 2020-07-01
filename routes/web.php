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

// Route::get('/', function () {
//     return view('home');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

// Routes for category pages
Route::get('category_overview', 'CategoryController@index');
Route::get('category/{id}', 'ProductController@productOverview');

// Routes for product pages
Route::get('product/{id}', 'ProductController@productIndex');
Route::get('/product/add/{id}', [
    'uses' => 'ProductController@add',
    'as' => 'product.add'
]);

// Routes for shopping cart page
Route::get('/shopping-cart', 'ShoppingCartController@getCart');
Route::post('/shoppingCart/update/{id}', [
    'uses' => 'ShoppingCartController@updateQuantity',
    'as' => 'shoppingCart.update'
]);
Route::get('delete', 'ShoppingCartController@deleteItem');
Route::get('delete/{id}', [
    'uses' => 'shoppingCartController@deleteItem',
    'as' => 'product.delete'
]);

// Routes for ordering
Route::get('order', [
    'uses' => 'shoppingCartController@order',
    'as' => 'product.order'
]);

Route::get('/orders', 'OrderController@index');
