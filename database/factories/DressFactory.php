<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dress>
 */
class DressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id'=> Category::inRandomOrder()->first()->id,
            'name' =>fake()->name(),
            'slug' => fake()->slug(),
            'price' => fake()->randomFloat(2, 100, 999.99),
            'description'=> fake()->sentence()
        ];
    }
}
