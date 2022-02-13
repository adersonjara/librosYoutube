<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsignarAutoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lib_asignar_autores', function (Blueprint $table) {
            //$table->id();
            $table->unsignedInteger('cod_libro');
            $table->foreign('cod_libro')->references('cod_libro')->on('libro')->onDelete('cascade');
            $table->unsignedInteger('cod_autor');
            $table->foreign('cod_autor')->references('cod_autor')->on('autor')->onDelete('cascade');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asignar_autor');
    }
}
