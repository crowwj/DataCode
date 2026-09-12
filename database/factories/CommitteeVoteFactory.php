<?php

namespace Database\Factories;

use App\Models\CommitteeProposal;
use App\Models\CommitteeVote;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<CommitteeVote>
 */
class CommitteeVoteFactory extends Factory
{
    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'proposal_id' => CommitteeProposal::factory(),
            'user_id' => User::factory(),
            'vote' => fake()->randomElement(['a_favor', 'en_contra', 'abstencion']),
            'voted_at' => now(),
        ];
    }
}
