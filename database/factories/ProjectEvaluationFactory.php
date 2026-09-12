<?php

namespace Database\Factories;

use App\Models\Project;
use App\Models\ProjectEvaluation;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ProjectEvaluation>
 */
class ProjectEvaluationFactory extends Factory
{
    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'project_id' => Project::factory(),
            'jury_id' => User::factory(),
            'score' => fake()->numberBetween(0, 100),
            'comments' => fake()->optional()->paragraph(),
        ];
    }
}
