<?php

namespace Database\Seeders;

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
		$libro->titulo = 'Tradiciones Peruanas I';
		$libro->descripcion = 'Contiene una serie de relatos cortos';
		$libro->idioma = 'Español';
		$libro->fecha = date('Y-m-d H:i:s');
		$libro->cod_categoria = 1;
		$libro->save();

		$libro->autores()->attach(1);
		$libro->autores()->attach(2);

		$libro = new Libro();
		$libro->titulo = 'Tradiciones Peruanas II';
		$libro->descripcion = 'Contiene una serie de relatos cortos';
		$libro->idioma = 'Español';
		$libro->fecha = date('Y-m-d H:i:s');
		$libro->cod_categoria = 1;
		$libro->save();

		$libro = new Libro();
		$libro->titulo = 'Tradiciones Peruanas III';
		$libro->descripcion = 'Contiene una serie de relatos cortos';
		$libro->idioma = 'Español';
		$libro->fecha = date('Y-m-d H:i:s');
		$libro->cod_categoria = 2;
		$libro->save();

		$libro = new Libro();
		$libro->titulo = 'Tradiciones Peruanas V';
		$libro->descripcion = 'Contiene una serie de relatos cortos';
		$libro->idioma = 'Español';
		$libro->fecha = date('Y-m-d H:i:s');
		$libro->cod_categoria = 3;
		$libro->save();

		$libro->autores()->attach(1);
		$libro->autores()->attach(2);
    }
}
