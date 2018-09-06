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
Route::get('/login', 'AuthController@showLoginForm')->name('users.login');
Route::post('/login', 'AuthController@login')->name('users.login.post');
Route::middleware(['auth', 'role:root'])->group(function () {
    Route::get('/', function () {
        return redirect()->route('admin.users.index');
    })->name('index');
    Route::view('/users', 'admin.pages.users')->name('users.index');
    Route::view('/feedback', 'admin.pages.feedback')->name('feedback.index');

    Route::get('/publications', 'PublicationController@index')->name('publications.index');
    Route::get('/publications/create', 'PublicationController@create')->name('publications.create');
    Route::get('/publications/{publication}', 'PublicationController@edit')->name('publications.edit');
    Route::post('/publications', 'PublicationController@store')->name('publications.store');
    Route::put('/publications/{publication}', 'PublicationController@update')->name('publications.update');

    Route::view('/settings', 'admin.pages.settings')->name('settings.index');
    Route::view('/sliders', 'admin.pages.sliders')->name('sliders.index');
    Route::post('/image', 'ImageController')->name('image.upload');
});
