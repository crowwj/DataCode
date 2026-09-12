<?php

namespace Database\Factories;

use App\Models\Classroom;
use App\Models\EventStatus;
use App\Models\Shift;
use App\Models\User;
use App\Models\Workshop;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Workshop>
 */
class WorkshopFactory extends Factory
{
    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $startTime = fake()->dateTimeBetween('+1 day', '+1 month');

        return [
            'name' => fake()->sentence(3),
            'shift_id' => Shift::factory(),
            'materials' => fake()->optional()->paragraph(),
            'capacity' => fake()->numberBetween(10, 40),
            'proposal' => fake()->optional()->paragraph(),
            'start_time' => $startTime,
            'end_time' => (clone $startTime)->modify('+2 hours'),
            'status_id' => EventStatus::factory(),
            'instructor_id' => User::factory(),
            'classroom_id' => Classroom::factory(),
        ];
    }
}
