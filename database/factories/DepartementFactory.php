<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DepartementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom_dep' => $this->faker->word(),
            'nombre_emp' => $this->faker->numberBetween(2, 15),
            'heure_debut' => $this->faker->time(),
            'heure_fin' => $this->faker->time(),
            'jour_repo' => $this->faker->word(),
            'even' => $this->faker->sentence(3),
            
        ];
    }
}
