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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuarios','UserController@index')->name('user.list');
Route::get('/usuarios/{user}','UserController@show')->name('user.detail')->where('user','[0-9]+');
Route::get('/usuarios/new','UserController@new')->name('user.new');
Route::post('/usuarios/store','UserController@store')->name('user.store');
Route::get('/usuarios/{user}/edit','UserController@edit')->name('user.edit');
Route::put('/usuarios/{user}','UserController@update');