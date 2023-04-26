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


Route::get('/providers', 'DataProviderController@index')->name('data-providers.index');
Route::get('/providers/create', 'DataProviderController@create')->name('data-providers.create');
Route::post('/providers', 'DataProviderController@store')->name('data-providers.store');
Route::get('/providers/{id}/edit', 'DataProviderController@edit')->name('data-providers.edit');
Route::put('/providers/{id}', 'DataProviderController@update')->name('data-providers.update');
Route::delete('/providers/{id}', 'DataProviderController@destroy')->name('data-providers.destroy');