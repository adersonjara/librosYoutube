<?php

namespace Database\Seeders;

use App\Models\Autor;
use App\Models\Categoria;
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

    	// 1.- Seeders
    	/*$libro = new Libro();
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
		$libro->categorias()->attach(2);*/

		/**************************************** FIN DE SEEDER *******************************************/


		// 2.- Factories
        $cantidadLibros = 100; 		// 100 + 100 = 200 libros
    	$cantidadAutores = 3;  		// 30 * 100 = 300  registros tabla pivot Autores
    	$cantidadCategorias = 3;	// 30 * 100 = 300  registros tabla pivot Categorias
        Libro::factory($cantidadLibros)->has(Autor::factory()->count($cantidadAutores),'autores')->create();
        Libro::factory($cantidadLibros)->has(Categoria::factory()->count($cantidadCategorias),'categorias')->create();

        /**************************************** FIN DE FACTORY *******************************************/


    	/*Forma Nº 1*/
    	// Libro::factory($cantidadLibros)->has(Autor::factory()->count($cantidadAutores),'autores')->create();

    	/*Forma Nº 2*/
    	/*$autores = Autor::factory()->count(4)->create();
    	Libro::factory($cantidadLibros)->hasAttached($autores,[],'autores')->create();
    	dd($autores);*/
    	
  
    }
}
