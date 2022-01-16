<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autor', function (Blueprint $table) {
            $table->increments('cod_autor');
            $table->string('nombres',100);
            $table->string('apellidos',100);
            $table->string('nombrecompleto',200);
            //$table->char('sexo',1);
             $table->unsignedInteger('cod_sexo')->nullable();
            $table->timestamps();

           
            $table->foreign('cod_sexo')->references('cod_sexo')->on('sexo');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('autor');
    }
}
