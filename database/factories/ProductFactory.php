<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => 'Product_'.$this->faker->numberBetween(1, 100),
            'description' => $this->faker->text,
            'image' => $this->faker->imageUrl(),
            'price' => $this->faker->numberBetween(10, 1000),
            'qty' => $this->faker->numberBetween(1, 1000),
            'category_id' => Category::get()->random()->id,
        ];
    }
}

