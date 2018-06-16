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
Route::get('/', 'WelcomeController@welcome');

Route::group(['prefix' => 'workzone'], function() {	
	Route::get('excel', ['as' => 'show-excel', 'uses' => 'ExcelController@show']);	
});

Route::group(['prefix' => 'media'],function() {
	Route::get('music', ['as' => 'show-music', 'uses' => 'MediaController@show_music']);
});

