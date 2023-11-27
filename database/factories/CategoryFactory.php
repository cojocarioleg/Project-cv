<?php

namespace Database\Factories;

use App\Helpers\ImageHelper;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Http\Request;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

            return [
                'title' => 'Category_'.$this->faker->unique()->numberBetween(1, 5),
                'description' => $this->faker->text,
                'image' => $this->faker->imageUrl(),
            ];


    }
}
