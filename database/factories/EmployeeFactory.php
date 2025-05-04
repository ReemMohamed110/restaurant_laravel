<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name,
            'role' => fake()->randomElement(['chief', 'assistant', 'accountant']),
            'salary' => fake()->numberBetween(3000, 10000),
            'phone' => fake()->phoneNumber,
            'address' => fake()->address,
            'birthdate' => fake()->date(),
            'gender' => fake()->randomElement(['male', 'female']),
            'status' => fake()->randomElement(['active', 'not active']),
            'nationalID' => fake()->unique()->numberBetween(10000000000000, 99999999999999),
            'image' => null,
        ];
    }
}
