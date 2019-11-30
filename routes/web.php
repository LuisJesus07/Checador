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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//rutas de modulo de usuarios
Route::get('/usuarios', 'UserController@index')->name('usuarios');
Route::get('/usuario/{id}', 'UserController@show')->name('usuario');
Route::get('/usuario_detail/{id}', 'UserController@detail')->name('usuario_detail');
Route::post('/usuario', 'UserController@store')->name('usuario');
Route::put('/usuario', 'UserController@update')->name('usuario');
Route::delete('/usuario/{id}', 'UserController@destroy');

//rutas del modulo de proyectos
Route::get('/proyectos', 'ProjectController@index')->name('proyectos');
Route::get('/proyecto/{id}', 'ProjectController@show')->name('proyecto');
Route::get('/proyecto_detail/{id}', 'ProjectController@detail')->name('proyecto_detail');
Route::post('/proyecto', 'ProjectController@store')->name('proyecto');
Route::put('/proyecto', 'ProjectController@update')->name('proyecto');
Route::delete('/proyecto/{id}', 'ProjectController@destroy');
