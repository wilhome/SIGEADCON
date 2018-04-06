<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contadores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
				$table->string('apellido');
				$table->integer('cedula')->unique();
				$table->integer('nro_colegiado')->unique();
            $table->string('email')->unique();
            $table->string('password');
	    		$table->string('telefono')->nullable();
				$table->string('institucion_univ')->nullable();
				$table->integer('ano')->nullable();
				$table->boolean('estatus')->default(false);
            $table->rememberToken();
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
        Schema::dropIfExists('contadores');
    }
}
