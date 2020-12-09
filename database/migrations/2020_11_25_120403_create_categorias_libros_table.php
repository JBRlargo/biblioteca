<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriasLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias_libros', function (Blueprint $table) {
            $table->string('isbn', 13);
            $table->unsignedBigInteger('idCategoria');
            $table->timestamps();

            $table->foreign('isbn')->references('isbn')->on('datos_libros');
            $table->foreign('idCategoria')->references('id')->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorias_libros');
    }
}
