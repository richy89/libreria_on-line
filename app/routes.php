<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index.index');
});

//Route::get('listalibros', array('uses' => 'AdministradorController@listadolibros'));

Route::resource('libro', 'LibroController');//Route::post('listalibros', array('uses' => 'AdministradorController@destroy'));

Route::get('login', function()
{
	return View::make('index.login');
});

Route::get('registrarse', function()
{
	return View::make('index.registrarse');
});

//Route::post('registrarlibro', array('uses' => 'AdministradorController@addlibro'));

Route::post('registrarse', array('uses' => 'IndexController@addusuario'));

// Nos mostrará el formulario de login.
Route::get('login', 'AuthController@showLogin');

// Validamos los datos de inicio de sesión.
Route::post('login', 'AuthController@postLogin');

// Nos indica que las rutas que están dentro de él sólo serán mostradas si antes el usuario se ha autenticado.
Route::group(array('before' => 'auth'), function()
{
    // Esta será nuestra ruta de bienvenida.
    Route::get('usuario', function()
    {
        return View::make('cliente.usuario');
    });
    Route::get('administrador', function()
    {
        return View::make('administrador.administrador');
    });
    // Esta ruta nos servirá para cerrar sesión.
    Route::get('logout', 'AuthController@logOut');
});
