<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // AsignarAutorSeeder, no se usa.
        $this->call(CategoriaSeeder::class);
        $this->call(AutorSeeder::class);
        $this->call(LibroSeeder::class);
        
        $this->call(AsignarAutorSeeder::class);
    }
}
