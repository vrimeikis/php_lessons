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


Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::group(['prefix' => 'article'], function () {
        Route::get('/', 'ArticleController@index')->name('article');

        Route::get('create', 'ArticleController@create')
            ->name('article.create');
        Route::post('create', 'ArticleController@store');

    });
});
