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
		$libro->save();

		$libro = new Libro();
		$libro->titulo = 'Tradiciones Peruanas II';
		$libro->descripcion = 'Contiene una serie de relatos cortos';
		$libro->idioma = 'Español';
		$libro->fecha = date('Y-m-d H:i:s');
		$libro->save();

		$libro = new Libro();
		$libro->titulo = 'Tradiciones Peruanas III';
		$libro->descripcion = 'Contiene una serie de relatos cortos';
		$libro->idioma = 'Español';
		$libro->fecha = date('Y-m-d H:i:s');
		$libro->save();
    }
}
