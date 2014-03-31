<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Libro extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('libro', function($table)
		{			
			$table->string('id', 20)->primary();
			
			$table->string('titulo', 50);
			$table->string('year', 5);
			$table->string('editorial', 100);
			$table->string('portada', 50);
			$table->string('descripcion', 300);
			$table->string('precio', 20);
			$table->string('stock', 5);
			
			$table->timestamps();
		});
    }

    /**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
		   
    public function down()
    {     
        Schema::drop('libro');
    }

}
