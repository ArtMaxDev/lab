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

Route::view('/', 'client.pages.index')->name('client.index');
Route::view('/team', 'client.pages.team')->name('client.team.index');
Route::view('/news', 'client.pages.news')->name('client.news.index');
Route::view('/news/item', 'client.pages.news-item')->name('client.news.item');
Route::view('/services/', 'client.pages.services')->name('client.services.item');
Route::view('/services-2/', 'client.pages.services-2')->name('client.services-2.item');
