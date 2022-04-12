<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'registration_number' => $this->faker->randomNumber(9, true),
            'fullname' => $this->faker->name(),
            'depart' => $this->faker->word(),
            'hire_date' => $this->faker->date(),
            'phone' => $this->faker->randomNumber(9, true),
            'address' => $this->faker->address(),
            'city' => $this->faker->state(),
        ];
    }
}
