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

Route::get('/', 'dashboardController@initDashboard');

Route::get('/heros', 'HerosController@show');
Route::get('/heros/create', 'HerosController@createView');

Route::post('/heros/insert','HerosController@insertHero');

Route::post('/heros/racesFilter/','HerosController@racesFilter');
