<?php

namespace Database\Factories;

use App\Enums\PaymentStatus;
use App\Models\Rent;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'rent_id'=> Rent::inRandomOrder()->first()->id,
            'amount' => fake()->randomFloat(2, 100, 999.99),
            'status' => fake()->randomElement(PaymentStatus::cases())
        ];
    }
}
