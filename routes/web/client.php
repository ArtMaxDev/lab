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

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [
        'localeSessionRedirect',
        'localizationRedirect',
    ]
], function () {
    Route::get('/', 'MainController')->name('client.index');
    Route::get('/team', 'BaseController@team')->name('client.team.index');
    Route::get('/news', 'NewsController@index')->name('client.news.index');
    Route::get('/news/{publication}', 'NewsController@item')->name('client.news.item');
    Route::get('/service/{service}', 'ServiceController@item')->name('client.service.item');
});

Route::post('/feedback', 'FeedbackController')->name('client.feedback.store');
