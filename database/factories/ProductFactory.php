<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
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
            'name' => fake()->sentence(),
            'brand' => fake()->sentence(2),
            'price' => fake()->randomDigitNot(0) * 100,
            'weight' => fake()->randomDigitNot(0),
            'description' => fake()->text()
        ];
    }
}
