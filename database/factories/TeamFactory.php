<?php

namespace Database\Factories;

use App\Models\Hackathon;
use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Team>
 */
class TeamFactory extends Factory
{
    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->words(2, true),
            'code' => fake()->unique()->bothify('??##'),
            'hackathon_id' => Hackathon::factory(),
        ];
    }
}
