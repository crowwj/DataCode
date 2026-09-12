<?php

namespace Database\Factories;

use App\Models\Payment;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = fake()->randomElement(['pendiente', 'pagado', 'fallido']);

        return [
            'user_id' => User::factory(),
            'concept' => fake()->sentence(3),
            'reference_id' => fake()->optional()->numberBetween(1, 1000),
            'amount' => fake()->randomFloat(2, 10, 500),
            'status' => $status,
            'paid_at' => $status === 'pagado' ? now() : null,
        ];
    }
}
