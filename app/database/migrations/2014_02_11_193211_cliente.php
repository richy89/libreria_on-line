<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cliente extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//codigo para crear la tabla de usuarios
		Schema::create('cliente', function($tabla)
		{
			$tabla->increments('id');
			$tabla->string('nombre', 50)->unique();		
			$tabla->string('password', 200);
			$tabla->string('tipousuario', 200);
			$tabla->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//codigo para eliminar la tabla
		Schema::drop('cliente');
	}

}