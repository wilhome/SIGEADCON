<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtestiguamientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atestiguamiento', function (Blueprint $table) {
            $table->increments('id');
				$table->integer('id_doc');
				$table->string('institucion')->nullable();
				$table->string('actividad')->nullable();
				$table->string('motivo')->nullable();
				$table->string('fecha')->nullable();
				$table->string('periodo_1')->nullable();
				$table->string('periodo_2')->nullable();
				$table->string('cod_doc_tipo')->default('ATES');
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
        Schema::dropIfExists('atestiguamiento');
    }
}
