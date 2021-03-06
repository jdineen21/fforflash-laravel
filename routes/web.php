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

Route::get('/', 'IndexController@index');

Route::get('/tier', 'TierListController@index');

Route::get('/champions', 'ChampionsController@index');

Route::get('/champion/{champion}', 'ChampionsController@show');

Route::get('/summoner', 'SummonerController@index');

Route::get('/contact', 'ContactController@index');

Route::get('/test', 'TestController@index');

Route::get('/archive', 'ArchiveController@index');

Route::get('/api/search', 'ApiSearchController@show');