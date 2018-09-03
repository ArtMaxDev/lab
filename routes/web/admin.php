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
/* Publications */
Route::view('/publications', 'admin.pages.publications')->name('admin.publications.index');
Route::view('/publications/create', 'admin.pages.publication-create')->name('admin.publications.create');
Route::view('/publications/{id}', 'admin.pages.publication-create')->name('admin.publications.edit');
/* END Publications */
Route::view('/settings', 'admin.pages.settings')->name('admin.settings.index');
Route::view('/login', 'admin.pages.login')->name('admin.users.login');
