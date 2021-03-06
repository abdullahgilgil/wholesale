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

Auth::routes();

Route::group(["middleware" => "auth"], function() {

//   Route::get('/', function () {
//      return view('welcome');
//   });

   Route::get('/', 'HomeController@index')->name('home');
   Route::get('/dropdown', 'HomeController@dropdown')->name('dropdown');
   Route::get('/cat', 'HomeController@categories')->name('categories');
   Route::get('/cat/{id}', 'HomeController@category')->name('showcategory');
   Route::get('/brands', 'HomeController@brands')->name('brands');
   Route::get('/products', 'HomeController@products')->name('products');

   Route::group(["prefix" => "category", "as" => "category", "namespace" => "Category"], function() {

      Route::get('/', 'CategoryController@index')->name('.index');
//      Route::get('/{category}', 'CategoryController@show')->name('.show');
      Route::get('/create', 'CategoryController@create')->name('.create');
      Route::post('/', 'CategoryController@store')->name('.store');
      Route::get('/{id}/edit', 'CategoryController@edit')->name('.edit');
      Route::patch('/{id}', 'CategoryController@update')->name('.update');
      Route::delete('/delete', 'CategoryController@destroy')->name('.destroy');

   });

   Route::group(["prefix" => "brand", "as" => "brand", "namespace" => "Brand"], function() {

      Route::get('/', 'BrandController@index')->name('.index');
//      Route::get('/{brand}', 'BrandController@show')->name('.show');
      Route::get('/create', 'BrandController@create')->name('.create');
      Route::post('/', 'BrandController@store')->name('.store');
      Route::get('/{brand}/{slug}/edit', 'BrandController@edit')->name('.edit');
      Route::patch('/{brand}', 'BrandController@update')->name('.update');
      Route::delete('/delete', 'BrandController@destroy')->name('.destroy');

   });

   Route::group(["prefix" => "product", "as" => "product", "namespace" => "Product"], function() {

      Route::get('/', 'ProductController@index')->name('.index');
//      Route::get('/{product}', 'ProductController@show')->name('.show');
      Route::get('/create', 'ProductController@create')->name('.create');
      Route::post('/', 'ProductController@store')->name('.store');
      Route::get('/{product}/{slug}/edit', 'ProductController@edit')->name('.edit');
      Route::patch('/{product}', 'ProductController@update')->name('.update');
      Route::delete('/delete', 'ProductController@destroy')->name('.destroy');

   });

});




