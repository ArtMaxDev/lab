<?php

/*
|--------------------------------------------------------------------------
| Admin Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('admin.users.index');
})->name('admin.index');
Route::view('/users', 'admin.pages.users')->name('admin.users.index');
Route::view('/feedback', 'admin.pages.feedback')->name('admin.feedback.index');

Route::get('/publications', 'PublicationController@index')->name('admin.publications.index');
Route::get('/publications/create', 'PublicationController@create')->name('admin.publications.create');
Route::get('/publications/{publication}', 'PublicationController@edit')->name('admin.publications.edit');
Route::post('/publications', 'PublicationController@store')->name('admin.publications.store');
Route::put('/publications/{publication}', 'PublicationController@update')->name('admin.publications.update');

Route::view('/settings', 'admin.pages.settings')->name('admin.settings.index');
Route::view('/login', 'admin.pages.login')->name('admin.users.login');
Route::view('/sliders', 'admin.pages.sliders')->name('admin.sliders.index');
Route::post('/image', 'ImageController')->name('image.upload');
