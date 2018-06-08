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

Route::get('/', 'PagesController@getIndex')->name('homepage');
Route::get('/about','PagesController@getAbout')->name('about');
Route::get('/contact', 'PagesController@getContact')->name('contact');
Route::get('/characters', 'CharController@indexPublic')->name('characters.public');
Route::get('/characters/{character}', 'CharController@showPublic')->name('characters.show.public');




Route::prefix('admin')->group(function(){

Route::get('/', 'AdminController@index')->name('admin.dashboard');
Route::resource('characters', 'CharController')->middleware('admin');

});
