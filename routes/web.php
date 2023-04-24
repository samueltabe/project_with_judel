<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'Frontend\FrontendController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth','isAdmin']], function(){
  Route::get('/dashboard', 'Admin\FrontendController@index');

  //category routes
  Route::get('categories', 'Admin\CategoryController@index');
  Route::get('add-categories', 'Admin\CategoryController@add');
  Route::post('insert-category', 'Admin\CategoryController@insert');
  Route::get('edit-category/{id}', 'Admin\CategoryController@edit');
  Route::put('update-category/{id}', 'Admin\CategoryController@update');
  Route::get('delete-category/{id}', 'Admin\CategoryController@delete');

  //product routes
  Route::get('product', 'Admin\ProductController@index');
  Route::get('add-product', 'Admin\ProductController@add');
  Route::post('insert-product', 'Admin\ProductController@insert');
  Route::get('edit-product/{id}', 'Admin\ProductController@edit');
  Route::put('update-product/{id}', 'Admin\ProductController@update');
  Route::get('delete-product/{id}', 'Admin\ProductController@delete');
  Route::get('show-product/{id}', 'Admin\ProductController@show');

  //Variant routes
  Route::get('variant', 'Admin\VariantController@index');
  Route::get('add-variant', 'Admin\VariantController@add');
  Route::post('insert-variant', 'Admin\VariantController@insert');
  Route::get('edit-variant/{id}', 'Admin\VariantController@edit');
  Route::put('update-variant/{id}', 'Admin\VariantController@update');
  Route::get('delete-variant/{id}', 'Admin\VariantController@delete');
});
