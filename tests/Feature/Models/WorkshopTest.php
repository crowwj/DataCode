<?php

namespace Tests\Feature\Models;

use App\Models\Classroom;
use App\Models\EventStatus;
use App\Models\Shift;
use App\Models\User;
use App\Models\Workshop;
use App\Models\WorkshopEnrollment;
use Illuminate\Foundation\Testing\LazilyRefreshDatabase;
use Tests\TestCase;

class WorkshopTest extends TestCase
{
    use LazilyRefreshDatabase;

    public function test_belongs_to_shift_status_instructor_and_classroom(): void
    {
        $shift = Shift::factory()->create();
        $status = EventStatus::factory()->create();
        $instructor = User::factory()->create();
        $classroom = Classroom::factory()->create();
        $workshop = Workshop::factory()->create([
            'shift_id' => $shift->id,
            'status_id' => $status->id,
            'instructor_id' => $instructor->id,
            'classroom_id' => $classroom->id,
        ]);

        $this->assertTrue($workshop->shift->is($shift));
        $this->assertTrue($workshop->status->is($status));
        $this->assertTrue($workshop->instructor->is($instructor));
        $this->assertTrue($workshop->classroom->is($classroom));
        $this->assertTrue($instructor->instructedWorkshops->contains($workshop));
    }

    public function test_enrolls_students_through_workshop_enrollments(): void
    {
        $workshop = Workshop::factory()->create();
        $student = User::factory()->create();
        $enrollment = WorkshopEnrollment::factory()->create([
            'workshop_id' => $workshop->id,
            'user_id' => $student->id,
        ]);

        $this->assertTrue($workshop->enrollments->contains($enrollment));
        $this->assertTrue($workshop->students->contains($student));
        $this->assertTrue($student->workshops->contains($workshop));
    }
}
