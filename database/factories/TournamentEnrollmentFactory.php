<?php

namespace Database\Factories;

use App\Models\Tournament;
use App\Models\TournamentEnrollment;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<TournamentEnrollment>
 */
class TournamentEnrollmentFactory extends Factory
{
    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tournament_id' => Tournament::factory(),
            'user_id' => User::factory(),
            'enrolled_at' => now(),
            'bracket_position' => fake()->optional()->numberBetween(1, 32),
        ];
    }
}
