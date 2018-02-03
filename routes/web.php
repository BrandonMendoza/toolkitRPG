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
//HEROES ROUTES
Route::get('/', 'dashboardController@initDashboard');
Route::get('/heros', 'HerosController@show');
Route::get('/heros/create', 'HerosController@createView');
Route::post('/heros/randomInsert','HerosController@submitHeroForm');
Route::get('/heros/{id}/edit','HerosController@getHero');//->name('editHero');
Route::post('/heros/{id}/update','HerosController@updateHero');
Route::get('/heros/{id}/destroy','HerosController@heroDestroy');
Route::post('/heros/insert','HerosController@submitHeroForm')->name('insertHero');
Route::get('/racesFilter','HerosController@racesFilter');
Route::get('/classFilter','HerosController@classFilter');
//END HEROES ROUTES

// MONSTERS ROUTES
Route::get('/monsters', 'MonstersController@show');
Route::get('/monsters/create', 'MonstersController@createView');
Route::get('/mracesFilter','MonstersController@racesFilter');
Route::post('/monsters/insert','MonstersController@submitMonsterForm')->name('insertMonster');
Route::get('/monsters/{id}/edit','MonstersController@getMonster');//->name('editHero');
Route::get('/monsters/{id}/destroy','MonstersController@monsterDestroy');

/*

Route::get('/heros/create', 'HerosController@createView');
Route::post('/heros/randomInsert','HerosController@submitHeroForm');
Route::get('/heros/{id}/edit','HerosController@getHero');//->name('editHero');
Route::post('/heros/{id}/update','HerosController@updateHero');
Route::get('/heros/{id}/destroy','HerosController@heroDestroy');
Route::post('/heros/insert','HerosController@submitHeroForm')->name('insertHero');
Route::get('/racesFilter','HerosController@racesFilter');
Route::get('/classFilter','HerosController@classFilter');

//END MONSTERS ROUTES
