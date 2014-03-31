<?php

class IndexController extends BaseController {

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

	public function showWelcome()
	{
		return View::make('index.index');
	}

	public function addusuario()
	{
		$usuario = new User;

		
		$usuario->nombre = Input::get('nombre');
		$usuario->password = Input::get('password');
		$usuario->tipousuario = Input::get('tipousuario');

		$usuario->save();

		return View::make('index.login'); 	
	}
}