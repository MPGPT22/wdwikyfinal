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
Route::get('/characters', 'CharController@indexPublic')->name('characters.public');
Route::get('/characters/{character}', 'CharController@showPublic')->name('characters.show.public');




Route::prefix('admin')->group(function(){

Route::get('/', 'AdminController@index')->name('admin.dashboard');
Route::resource('characters', 'CharController');
Route::get('/characters/set_public/{id}', 'CharController@set_public')->name('char.set.public');
Route::get('/characters/set_not_public/{id}', 'CharController@set_not_public')->name('char.set.not.public');
Route::resource('classes', 'CharClassController');
Route::get('/classes/set_public/{id}', 'CharClassController@set_public')->name('charclass.set.public');
Route::get('/classes/set_not_public/{id}', 'CharClassController@set_not_public')->name('charclass.set.not.public');
Route::resource('armors', 'ArmorController');
Route::get('/armors/set_public/{id}', 'ArmorController@set_public')->name('armor.set.public');
Route::get('/armors/set_not_public/{id}', 'ArmorController@set_not_public')->name('armor.set.not.public');
Route::resource('items', 'ItemController');
Route::get('/items/set_public/{id}', 'ItemController@set_public')->name('items.set.public');
Route::get('/items/set_not_public/{id}', 'ItemController@set_not_public')->name('items.set.not.public');
Route::resource('skills', 'SkillController');
Route::get('/skills/set_public/{id}', 'SkillController@set_public')->name('skills.set.public');
Route::get('/skills/set_not_public/{id}', 'SkillController@set_not_public')->name('skills.set.not.public');
Route::resource('spells', 'SpellController');
Route::get('/spells/set_public/{id}', 'SpellController@set_public')->name('spells.set.public');
Route::get('/spells/set_not_public/{id}', 'SpellController@set_not_public')->name('spells.set.not.public');
Route::resource('states', 'StateController');
Route::get('/states/set_public/{id}', 'StateController@set_public')->name('states.set.public');
Route::get('/states/set_not_public/{id}', 'StateController@set_not_public')->name('states.set.not.public');
Route::resource('weapons', 'WeaponController');
Route::get('/weapons/set_public/{id}', 'WeaponController@set_public')->name('weapons.set.public');
Route::get('/weapons/set_not_public/{id}', 'WeaponController@set_not_public')->name('weapons.set.not.public');

});
