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
            'category_id'=> Category::inRandomOrder()->first()->id, //Assign a random id from table categories
            'price' => fake()->randomFloat(2, 100, 999.99), //2 decimal places, 100 minimum value, 999.99 maximum value
            'description'=> fake()->sentence()
        ];
    }
}
