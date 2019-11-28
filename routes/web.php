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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//rutas de modulo de usuarios
Route::get('/usuarios', 'UserController@index')->name('usuarios');
Route::get('/usuario/{id}', 'UserController@show')->name('usuario');
Route::post('/usuario', 'UserController@store')->name('usuario');
Route::put('/usuario', 'UserController@update')->name('usuario');
Route::delete('/usuario/{id}', 'UserController@destroy');