<?php

namespace Database\Factories;

use App\Models\Classroom;
use App\Models\Hackathon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Hackathon>
 */
class HackathonFactory extends Factory
{
    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $startTime = fake()->dateTimeBetween('+1 day', '+1 month');

        return [
            'name' => fake()->sentence(3),
            'format' => fake()->randomElement(['hackathon', 'buildathon']),
            'start_time' => $startTime,
            'end_time' => (clone $startTime)->modify('+2 days'),
            'classroom_id' => Classroom::factory(),
        ];
    }
}
