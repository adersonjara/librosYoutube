<?php

namespace Database\Factories;

use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;

class LibroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->name(),
            'descripcion' => $this->faker->paragraph(1),
            'idioma' => $this->faker->randomElement(['Español','Ingles','Chino']),
            'fecha' => $this->faker->dateTime(),
            'cod_categoria' => Categoria::all()->random()->cod_categoria
        ];
    }
}
