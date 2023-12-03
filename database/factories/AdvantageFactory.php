<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Advantage>
 */
class AdvantageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => 'Advantage_'.$this->faker->numberBetween(1, 5),
            'advantage_1' => 'text_'.$this->faker->numberBetween(1, 20),
            'advantage_2' => 'text_'.$this->faker->numberBetween(1, 20),
            'advantage_3' => 'text_'.$this->faker->numberBetween(1, 20),
            'advantage_4' => 'text_'.$this->faker->numberBetween(1, 20),
            'icon' => 'fas fa-cubes',

        ];
    }
}
