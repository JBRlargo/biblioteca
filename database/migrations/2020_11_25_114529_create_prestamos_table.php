<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class CreatePrestamosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $date = Carbon::now();
        Schema::create('prestamos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idLibro');
            $table->bigInteger('idUsuario');
            $table->date('fechaEntregado')->default(Carbon::now());
            $table->date('fechaDevolucion')->default(Cabron::now()->addWeek());
            $table->date('fechaDevuelto')->nullable();
            $table->timestamps();

            $table->foreignId('idLibro')->constrained('libros');
            $table->foreign('isbn')->references('isbn')->on('datos_libros');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prestamos');
    }
}
