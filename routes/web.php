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
Route::get('category_overview', 'CategoryController@index');
Route::get('category/{id}', 'ProductController@productOverview');
Route::get('product/{id}', 'ProductController@productIndex');

Route::get('/product/add/{id}', 'Productcontroller@add')->name('product');
