<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libro', function (Blueprint $table) {
            $table->increments('cod_libro');
            $table->string('titulo',100)->unique();
            $table->string('descripcion',200)->nullable();
            // $table->string('idioma',100);
            $table->date('fecha_publicacion');
            $table->timestamps();
            
            $table->unsignedInteger('cod_idioma')->nullable();
            $table->foreign('cod_idioma')->references('cod_idioma')->on('idioma')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libro');
    }
}
