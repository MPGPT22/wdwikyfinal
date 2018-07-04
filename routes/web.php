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
Route::get('/skills', 'SkillController@indexPublic')->name('skills.public');
Route::get('/skills/{skill}', 'SkillController@showPublic')->name('skills.show.public');
Route::get('/spells', 'SpellController@indexPublic')->name('spells.public');
Route::get('/spells/{spell}', 'SpellController@showPublic')->name('spells.show.public');
Route::get('/states', 'StateController@indexPublic')->name('states.public');
Route::get('/states/{state}', 'StateController@showPublic')->name('states.show.public');
Route::get('/weapons', 'WeaponController@indexPublic')->name('weapons.public');
Route::get('/weapons/{weapon}', 'WeaponController@showPublic')->name('weapons.show.public');
Route::get('/armors', 'ArmorController@indexPublic')->name('armors.public');
Route::get('/armors/{armor}', 'ArmorController@showPublic')->name('armors.show.public');
Route::get('/items', 'ItemController@indexPublic')->name('items.public');
Route::get('/items/{item}', 'ItemController@showPublic')->name('items.show.public');
Route::get('/map','PagesController@getMap')->name('map');




Route::prefix('admin')->group(function(){

Route::get('/', 'AdminController@index')->name('admin.dashboard');
Route::resource('characters', 'CharController');
Route::get('/characters/create/simple', 'CharController@create_simple')->name('char.create.simple');
Route::get('/characters/create/complex', 'CharController@create_complex')->name('char.create.complex');
Route::get('/characters/{id}/edit/simple', 'CharController@editSimple')->name('char.edit.simple');
Route::get('/characters/{id}/edit/complex', 'CharController@editComplex')->name('char.edit.complex');
Route::get('/characters/set_public/{id}', 'CharController@set_public')->name('char.set.public');
Route::get('/characters/set_not_public/{id}', 'CharController@set_not_public')->name('char.set.not.public');
Route::resource('classes', 'CharClassController');
Route::get('/classes/set_public/{id}', 'CharClassController@set_public')->name('charclass.set.public');
Route::get('/classes/set_not_public/{id}', 'CharClassController@set_not_public')->name('charclass.set.not.public');
Route::resource('armors', 'ArmorController');
Route::get('/armors/set_public/{id}', 'ArmorController@set_public')->name('armors.set.public');
Route::get('/armors/set_not_public/{id}', 'ArmorController@set_not_public')->name('armors.set.not.public');
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
