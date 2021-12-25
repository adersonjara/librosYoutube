<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Libro;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoria =  new Categoria();
        $categoria->titulo = 'Novelas';
        $categoria->save();

        $categoria =  new Categoria();
        $categoria->titulo = 'Biografías';
        $categoria->save();

        $categoria =  new Categoria();
        $categoria->titulo = 'Científicos';
        $categoria->save();
    }
}
