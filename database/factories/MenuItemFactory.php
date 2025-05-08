<?php

namespace Database\Factories;

use App\Models\Categories;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MenuItem>
 */
class MenuItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'description' => fake()->sentence(), 
            'image' => null, 
            'status' => fake()->randomElement(['active', 'not active']), 
            'price' => fake()->randomFloat(2, 1, 100), 
            'category_id' =>rand(1,5),
        ];
    }
}
