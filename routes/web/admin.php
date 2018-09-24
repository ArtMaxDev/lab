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
Route::post('/logout', 'AuthController@logout')->name('users.logout.post');

Route::middleware(['auth', 'role:root'])->group(function () {
    Route::get('/', function () {
        return redirect()->route('admin.users.index');
    })->name('index');

    Route::get('/users', 'UserController@index')->name('users.index');
    Route::post('/users', 'UserController@store')->name('users.store');
    Route::put('/users/{user}', 'UserController@update')->name('users.update');
    Route::delete('/users/{user}', 'UserController@delete')->name('users.delete');

    Route::get('/feedback', 'FeedbackController@index')->name('feedback.index');
    Route::put('/feedback/{feedback}', 'FeedbackController@update')->name('feedback.update');
    Route::delete('/feedback/{feedback}', 'FeedbackController@destroy')->name('feedback.destroy');

    Route::get('/publications', 'PublicationController@index')->name('publications.index');
    Route::get('/publications/create', 'PublicationController@create')->name('publications.create');
    Route::get('/publications/{publication}', 'PublicationController@edit')->name('publications.edit');
    Route::post('/publications', 'PublicationController@store')->name('publications.store');
    Route::put('/publications/{publication}', 'PublicationController@update')->name('publications.update');
    Route::delete('/publications/{publication}', 'PublicationController@destroy')->name('publications.destroy');

    Route::get('/settings', 'SettingsController@index')->name('settings.index');
    Route::put('/settings', 'SettingsController@update')->name('settings.update');

    Route::post('/image', 'ImageController')->name('image.upload');

    Route::get('/sliders', 'SliderController@index')->name('sliders.index');
    Route::post('/sliders', 'SliderController@store')->name('sliders.store');
    Route::put('/sliders/{slide}', 'SliderController@update')->name('sliders.update');
    Route::delete('/sliders/{slide}', 'SliderController@destroy')->name('sliders.destroy');
});
