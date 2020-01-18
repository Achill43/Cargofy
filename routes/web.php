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

Route::get('/test', 'SPAController@test');
Route::post('/testForm', 'SPAController@testForm')->name('testForm');
Route::get('/ways', 'WayController@index');
Route::post('/addWay/', 'WayController@create');

Route::get('/', 'SPAController@index');

Route::get('/clear', function(){
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
	Artisan::call('route:clear');
    return "Кэш очищен.";
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
