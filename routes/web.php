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

Route::get('/hotels',"AdminController@index");
Route::get('/hotels/dashboard',"AdminController@admin");
Route::get('/hotels/create',"AdminController@create");
Route::post('/hotels',"AdminController@store");


