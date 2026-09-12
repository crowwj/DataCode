<?php

namespace Database\Factories;

use App\Models\Classroom;
use App\Models\EventStatus;
use App\Models\Tournament;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Tournament>
 */
class TournamentFactory extends Factory
{
    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $startTime = fake()->dateTimeBetween('+1 day', '+1 month');

        return [
            'game' => fake()->words(2, true),
            'capacity' => fake()->numberBetween(8, 64),
            'start_time' => $startTime,
            'end_time' => (clone $startTime)->modify('+4 hours'),
            'registration_deadline' => (clone $startTime)->modify('-1 day'),
            'status_id' => EventStatus::factory(),
            'organizer_id' => User::factory(),
            'classroom_id' => Classroom::factory(),
        ];
    }
}
