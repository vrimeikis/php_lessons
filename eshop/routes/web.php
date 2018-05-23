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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['prefix' => 'products'], function () {
        Route::get('/', 'ProductController@index')->name('product.list');
        Route::get('create', 'ProductController@create')->name('product.create');
        Route::post('create', 'ProductController@store');
        Route::get('view/{product}', 'ProductController@show')->name('product.view');
        Route::get('edit/{product}', 'ProductController@edit')->name('product.edit');
        Route::put('edit/{product}', 'ProductController@update');
        Route::delete('delete/{product}', 'ProductController@destroy')->name('product.delete');
    });
});
