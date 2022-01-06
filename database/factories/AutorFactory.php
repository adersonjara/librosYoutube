<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AutorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombres' => $this->faker->firstName().' '.$this->faker->firstName() ,
            'apellidos' => $this->faker->lastName().' '.$this->faker->lastName(),
            'nombrecompleto' => $this->faker->firstName().' '.$this->faker->firstName().' '.$this->faker->lastName().' '.$this->faker->lastName(),
            'sexo' => $this->faker->randomElement(['M','F']) // Masculino, Femenino
        ];
    }
}
