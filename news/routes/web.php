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

Auth::routes();


Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::group(['prefix' => 'article'], function () {
        Route::get('/', 'ArticleController@index')->name('article');

        Route::get('create', 'ArticleController@create')
            ->name('article.create');
        Route::post('create', 'ArticleController@store');

        Route::get('edit/{article}', 'ArticleController@edit')->name('article.edit');
        Route::put('edit/{article}', 'ArticleController@update');
    });
});

Route::get('/', 'ArticleController@getList')
    ->name('front.article.list');
Route::get('article/{slug}', 'ArticleController@getBySlug')
    ->name('front.article.once');
