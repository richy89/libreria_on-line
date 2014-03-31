<?php

class LibroController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$libro = Libros::all();
   		return View::make('administrador.listalibros')->with('libro', $libro);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$libro = new Libros();
   		return View::make('administrador.administrador')->with('libro', $libro);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$libro = new Libros;

		$libro->id = Input::get('id_libro');
		$libro->titulo = Input::get('titulo');
		$libro->year = Input::get('year');

		$libro->save();

		return Redirect::to('libro');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$libro = Libros::find($id);
   		return View::make('administrador.visualizarlibro')->with('libro', $libro);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$libro = Libros::find($id);
  		return View::make('administrador.modificarlibro')->with('libro', $libro);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$libro = Libros::find($id);

		$libro->titulo = Input::get('titulo');
		$libro->year = Input::get('year');

   		$libro->save();

   		return Redirect::to('libro');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */

	public function destroy($id)
	{
		$libro = Libros::find($id);
        $libro->delete();
        return Redirect::to('libro');
	}

}