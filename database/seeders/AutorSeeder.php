<?php

namespace Database\Seeders;

use App\Models\Autor;
use Illuminate\Database\Seeder;

class AutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // 1.- Seeders

        $autor = new Autor();
        $autor->nombres = 'Ricardo'; // Tradiciones Peruans, Ficción Histórica, Español
        $autor->apellidos = 'Palma';
        $autor->sexo = 'M';
        $autor->save();

        $autor = new Autor();
        $autor->nombres = 'William';
        $autor->apellidos = 'Shakespeare'; // Romeo y Julieta, Melodrama, Inglés 
        $autor->sexo = 'M';
        $autor->save();


        //$cantidadAutores = 100;

        //Autor::factory($cantidadAutores)->create();
        // $autor = new Autor();
        // $autor->nombres = 'Ricardo';
        // $autor->apellidos = 'Palma';
        // $autor->sexo = 'M';
        // $autor->save();

        // // $autor->libros()->attach(1);
        // // $autor->libros()->attach(2);

        // $autor = new Autor();
        // $autor->nombres = 'Ricardo 2';
        // $autor->apellidos = 'Palma 2';
        // $autor->sexo = 'M';
        // $autor->save();

        // // $autor->libros()->attach(3);
    }
}
