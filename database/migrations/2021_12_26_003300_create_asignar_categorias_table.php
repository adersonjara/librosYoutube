<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsignarCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignar_categorias', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('cod_libro');
            $table->foreign('cod_libro')->references('cod_libro')->on('libro')->onDelete('cascade');
            $table->unsignedInteger('cod_categoria');
            $table->foreign('cod_categoria')->references('cod_categoria')->on('categoria')->onDelete('cascade');
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
        Schema::dropIfExists('asignar_categorias');
    }
}
