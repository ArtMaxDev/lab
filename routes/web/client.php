<?php

/*
|--------------------------------------------------------------------------
| Client Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
    Route::get('/', 'MainController')->name('client.index');
    Route::view('/team', 'client.pages.team')->name('client.team.index');
    Route::get('/news', 'NewsController@index')->name('client.news.index');
    Route::get('/news/item', 'NewsController@item')->name('client.news.item');
    Route::view('/services/', 'client.pages.services')->name('client.services.index');
    Route::view('/services-2/', 'client.pages.services-2')->name('client.services-2.index');
});
