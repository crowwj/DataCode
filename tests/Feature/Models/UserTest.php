<?php

namespace Tests\Feature\Models;

use App\Models\Badge;
use App\Models\Municipality;
use App\Models\Payment;
use App\Models\Role;
use App\Models\StudentProfile;
use App\Models\TeacherProfile;
use App\Models\Team;
use App\Models\User;
use Illuminate\Foundation\Testing\LazilyRefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    use LazilyRefreshDatabase;

    public function test_belongs_to_role_and_municipality(): void
    {
        $role = Role::factory()->create();
        $municipality = Municipality::factory()->create();
        $user = User::factory()->create([
            'role_id' => $role->id,
            'municipality_id' => $municipality->id,
        ]);

        $this->assertTrue($user->role->is($role));
        $this->assertTrue($user->municipality->is($municipality));
    }

    public function test_has_one_student_profile_teacher_profile_and_badge(): void
    {
        $user = User::factory()->create();
        $studentProfile = StudentProfile::factory()->create(['user_id' => $user->id]);
        $teacherProfile = TeacherProfile::factory()->create(['user_id' => $user->id]);
        $badge = Badge::factory()->create(['user_id' => $user->id]);

        $this->assertTrue($user->studentProfile->is($studentProfile));
        $this->assertTrue($user->teacherProfile->is($teacherProfile));
        $this->assertTrue($user->badge->is($badge));
    }

    public function test_belongs_to_many_teams_and_has_many_payments(): void
    {
        $user = User::factory()->create();
        $team = Team::factory()->create();
        $payment = Payment::factory()->create(['user_id' => $user->id]);

        $user->teams()->attach($team);

        $this->assertTrue($user->teams->contains($team));
        $this->assertTrue($user->payments->contains($payment));
    }
}
