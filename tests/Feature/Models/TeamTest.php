<?php

namespace Tests\Feature\Models;

use App\Models\Hackathon;
use App\Models\Project;
use App\Models\ProjectEvaluation;
use App\Models\Team;
use App\Models\User;
use Illuminate\Foundation\Testing\LazilyRefreshDatabase;
use Tests\TestCase;

class TeamTest extends TestCase
{
    use LazilyRefreshDatabase;

    public function test_belongs_to_hackathon_and_has_one_project(): void
    {
        $hackathon = Hackathon::factory()->create();
        $team = Team::factory()->create(['hackathon_id' => $hackathon->id]);
        $project = Project::factory()->create(['team_id' => $team->id]);

        $this->assertTrue($team->hackathon->is($hackathon));
        $this->assertTrue($team->project->is($project));
        $this->assertTrue($hackathon->teams->contains($team));
    }

    public function test_members_and_jury_evaluations_are_linked(): void
    {
        $team = Team::factory()->create();
        $member = User::factory()->create();
        $jury = User::factory()->create();
        $project = Project::factory()->create(['team_id' => $team->id]);
        $evaluation = ProjectEvaluation::factory()->create([
            'project_id' => $project->id,
            'jury_id' => $jury->id,
        ]);

        $team->members()->attach($member);

        $this->assertTrue($team->members->contains($member));
        $this->assertTrue($project->evaluations->contains($evaluation));
        $this->assertTrue($jury->projectEvaluations->contains($evaluation));
    }
}
