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

Route::get('/pruebaRelacion', function(){

	$usuario = App\User::findOrFail(1);

	return $usuario->checks()->whereStatus('concluida')->get()->count();
});

Route::get('/pruebaUserProject', function(){

	//$usuario = App\User::findOrFail(2);

	//return $usuario->projects()->get();

	$proyecto = App\Project::findOrFail(2);

	return $proyecto->users()->get();

});

Route::get('/checador', function(){
	return view('check.index');
});


Route::get('/home', 'HomeController@index')->name('home');


//rutas de modulo de usuarios
Route::get('/usuarios', 'UserController@index')->name('usuarios');
Route::get('/usuario/{id}', 'UserController@show')->name('usuario');
Route::get('/usuario_detail/{id}', 'UserController@detail')->name('usuario_detail');
Route::post('/usuario', 'UserController@store')->name('usuario');
Route::put('/usuario', 'UserController@update')->name('usuario');
Route::delete('/usuario/{id}', 'UserController@destroy');
Route::post('/inscribeToProject/{id}', 'UserController@inscribeToProject')->name('inscribeToProject');

//rutas del modulo de proyectos
Route::get('/proyectos', 'ProjectController@index')->name('proyectos');
Route::get('/proyecto/{id}', 'ProjectController@show')->name('proyecto');
Route::get('/proyecto_detail/{id}', 'ProjectController@detail')->name('proyecto_detail');
Route::post('/proyecto', 'ProjectController@store')->name('proyecto');
Route::put('/proyecto', 'ProjectController@update')->name('proyecto');
Route::delete('/proyecto/{id}', 'ProjectController@destroy');

//rutas de checks
Route::get('/check', 'CheckController@index')->name('check');
