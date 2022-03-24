<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\course>
 */
class CourseFactory extends Factory
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
            'price' => $this->faker->numberBetween(100,300),
            'description' => $this->faker->text(),
        ];
    }
}
