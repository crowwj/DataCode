<?php

namespace Database\Factories;

use App\Models\Project;
use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Project>
 */
class ProjectFactory extends Factory
{
    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'team_id' => Team::factory(),
            'name' => fake()->sentence(3),
            'description' => fake()->optional()->paragraph(),
            'repository_url' => fake()->optional()->url(),
            'submitted_at' => fake()->optional()->dateTimeBetween('-1 week', 'now'),
        ];
    }
}
