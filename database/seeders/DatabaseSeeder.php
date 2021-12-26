<?php

namespace Database\Seeders;

use App\Models\Autor;
use App\Models\Categoria;
use App\Models\Libro;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        Categoria::truncate();
        Autor::truncate();
        Libro::truncate();
        // \App\Models\User::factory(10)->create();
        $this->call(CategoriaSeeder::class);
        $this->call(AutorSeeder::class);
        $this->call(LibroSeeder::class);
        
    }
}
