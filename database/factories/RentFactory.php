<?php

namespace Database\Factories;
use App\Models\Customer;
Use App\Models\Dress;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rent>
 */
class RentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_id'=> Customer::inRandomOrder()->first()->id,
            'dress_id'=> Dress::inRandomOrder()->first()->id,
            'amount' =>fake()->randomFloat(2, 100, 999.99),
            'start_date' => $startDate = $this->faker->date(),
            'end_date' => $this->faker->dateTimeBetween($startDate, '+31 days'),
        ];
    }
}
