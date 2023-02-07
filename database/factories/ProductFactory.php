<?php

namespace Database\Factories;

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
    public function definition()
    {
        return [
            'name' => fake()->name,
            'slug' => fake()->slug,
            'description' => fake()->text,
            'price' => fake()->randomFloat(2, 1, 100),
            'category_id' => fake()->numberBetween(1, 2),
            'user_id' => fake()->numberBetween(1),
        ];
    }
}
