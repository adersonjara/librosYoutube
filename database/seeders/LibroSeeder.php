<?php

namespace Database\Seeders;

use App\Models\Autor;
use App\Models\Libro;
use Illuminate\Database\Seeder;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$libro = new Libro();
		$libro->titulo = 'Tradiciones Peruanas';
		$libro->descripcion = 'Conjunto de textos escritos por el peruano Ricardo Palma';
		$libro->idioma = 'Español';
		$libro->fecha_publicacion = date('Y-m-d H:i:s');
		$libro->save();

		$libro->autores()->attach(1);
		$libro->categorias()->attach(1);


		$libro = new Libro();
		$libro->titulo = 'Romeo y Julieta';
		$libro->descripcion = 'Es una tragedia y melodrama del dramaturgo inglés William Shakespeare';
		$libro->idioma = 'Inglés';
		$libro->fecha_publicacion = date('Y-m-d H:i:s');
		$libro->save();

		$libro->autores()->attach(2);
		$libro->categorias()->attach(2);

    	// $cantidadLibros = 10;
    	// $cantidadAutores = 2;

    	//Libro::factory($cantidadLibros)->create();

    	/*Forma Nº 1*/
    	// Libro::factory($cantidadLibros)->has(Autor::factory()->count($cantidadAutores),'autores')->create();

    	/*Forma Nº 2*/
    	/*$autores = Autor::factory()->count(4)->create();
    	Libro::factory($cantidadLibros)->hasAttached($autores,[],'autores')->create();
    	dd($autores);*/
    	
  //       $libro = new Libro();
		// $libro->titulo = 'Tradiciones Peruanas I';
		// $libro->descripcion = 'Contiene una serie de relatos cortos';
		// $libro->idioma = 'Español';
		// $libro->fecha = date('Y-m-d H:i:s');
		// $libro->cod_categoria = 1;
		// $libro->save();

		// $libro->autores()->attach(1);
		// $libro->autores()->attach(2);

		// $libro = new Libro();
		// $libro->titulo = 'Tradiciones Peruanas II';
		// $libro->descripcion = 'Contiene una serie de relatos cortos';
		// $libro->idioma = 'Español';
		// $libro->fecha = date('Y-m-d H:i:s');
		// $libro->cod_categoria = 1;
		// $libro->save();

		// $libro = new Libro();
		// $libro->titulo = 'Tradiciones Peruanas III';
		// $libro->descripcion = 'Contiene una serie de relatos cortos';
		// $libro->idioma = 'Español';
		// $libro->fecha = date('Y-m-d H:i:s');
		// $libro->cod_categoria = 2;
		// $libro->save();

		// $libro = new Libro();
		// $libro->titulo = 'Tradiciones Peruanas V';
		// $libro->descripcion = 'Contiene una serie de relatos cortos';
		// $libro->idioma = 'Español';
		// $libro->fecha = date('Y-m-d H:i:s');
		// $libro->cod_categoria = 3;
		// $libro->save();

		// $libro->autores()->attach(1);
		// $libro->autores()->attach(2);
    }
}
