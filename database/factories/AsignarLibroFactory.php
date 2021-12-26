<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AsignarLibroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cod_libro' => Libro::all()->random()->id,
            'cod_autor' => Autor::all()->random()->id
        ];
    }
}
