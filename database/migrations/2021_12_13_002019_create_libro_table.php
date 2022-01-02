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
            $table->string('idioma',100);
            $table->dateTime('fecha_publicacion');
            $table->timestamps();
            
            /*$table->integer('cod_categoria')->unsigned();
            $table->foreign('cod_categoria')->references('cod_categoria')->on('categoria');*/

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
