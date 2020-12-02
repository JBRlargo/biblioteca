<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_libros', function (Blueprint $table) {
            $table->string('isbn', 13)->primary();
            $table->string('titulo', 100);
            $table->string('autor', 100);
            $table->integer('paginas');
            $table->text('resumen');
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
        Schema::dropIfExists('datos_libros');
    }
}
