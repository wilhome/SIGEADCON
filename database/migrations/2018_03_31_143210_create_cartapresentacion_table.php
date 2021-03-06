<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartapresentacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartapresentacion', function (Blueprint $table) {
            $table->increments('id');
				$table->integer('id_doc');
				$table->string('direccion')->nullable();
				$table->string('soporte')->nullable();
				$table->string('periodo')->nullable();
				$table->string('fecha')->nullable();
				$table->string('cod_doc_tipo')->default("CPRE");
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
        Schema::dropIfExists('cartapresentacion');
    }
}
