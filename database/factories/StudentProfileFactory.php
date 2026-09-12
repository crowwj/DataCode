<?php

namespace Database\Factories;

use App\Models\Shift;
use App\Models\StudentProfile;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<StudentProfile>
 */
class StudentProfileFactory extends Factory
{
    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'career' => fake()->words(3, true),
            'semester' => fake()->numberBetween(1, 12),
            'group' => fake()->bothify('?#'),
            'shift_id' => Shift::factory(),
            'user_id' => User::factory(),
        ];
    }
}
