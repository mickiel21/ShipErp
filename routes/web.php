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


Route::post('/data-providers/add', [DataProviderController::class, 'add'])->name('data-providers.add');
Route::post('/data-providers/edit', [DataProviderController::class, 'edit'])->name('data-providers.edit');
Route::post('/data-providers/delete', [DataProviderController::class, 'delete'])->name('data-providers.delete');

Route::get('/data-providers/get-image/{id}', [DataProviderController::class, 'getImage'])->name('data-providers.getImage');
