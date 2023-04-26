<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/data-providers', 'DataProviderController@index')->name('data-providers.index');
Route::get('/data-providers/create', 'DataProviderController@create')->name('data-providers.create');
Route::post('/data-providers', 'DataProviderController@store')->name('data-providers.store');
Route::get('/data-providers/{id}/edit', 'DataProviderController@edit')->name('data-providers.edit');
Route::put('/data-providers/{id}', 'DataProviderController@update')->name('data-providers.update');
Route::delete('/data-providers/{id}', 'DataProviderController@destroy')->name('data-providers.destroy');

//Api use to get the Image
Route::get('/data-providers/get-image/{id}', 'DataProviderController@getImage')->name('data-providers.get-image');