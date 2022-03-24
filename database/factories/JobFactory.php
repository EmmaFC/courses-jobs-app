<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'vacants' => $this->faker->numberBetween(1,25),
            'date-start' => $this->faker->date(),
            'date-end' => $this->faker->date(),
            'wage' => $this->faker->numberBetween(1000,3000),
            'description' => $this->faker->text(),
        ];
    }
    
}
