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

        /*$autor = new Autor();
        $autor->nombres = 'Ricardo'; // Tradiciones Peruans, Ficción Histórica, Español
        $autor->apellidos = 'Palma';
        $autor->sexo = 'M';
        $autor->save();

        $autor = new Autor();
        $autor->nombres = 'William';
        $autor->apellidos = 'Shakespeare'; // Romeo y Julieta, Melodrama, Inglés 
        $autor->sexo = 'M';
        $autor->save();*/

        /**************************************** FIN DE SEEDER *******************************************/


        // 2.- Factories
        /*$cantidadAutores = 100;
        Autor::factory($cantidadAutores)->create();*/
        /**************************************** FIN DE FACTORY *******************************************/

    }
}
