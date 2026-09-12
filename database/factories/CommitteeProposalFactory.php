<?php

namespace Database\Factories;

use App\Models\CommitteeProposal;
use App\Models\ProposalStatus;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<CommitteeProposal>
 */
class CommitteeProposalFactory extends Factory
{
    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(4),
            'description' => fake()->paragraph(),
            'created_by' => User::factory(),
            'status_id' => ProposalStatus::factory(),
            'voting_closes_at' => fake()->optional()->dateTimeBetween('now', '+1 month'),
        ];
    }
}
