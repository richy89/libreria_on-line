<?php

class AdministradorController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function addlibro()
	{
		$libro = new Libros;

		$libro->id = Input::get('id_libro');
		$libro->titulo = Input::get('titulo');
		$libro->year = Input::get('year');

		$libro->save();

		return Redirect::to('listalibros'); 	
	}

	public function listadolibros()
   	{
        $libros = Libros::all();
        return View::make('administrador.listalibros', array('libros' => $libros));
   	}
}