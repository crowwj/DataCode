<?php

namespace Database\Factories;

use App\Models\Building;
use App\Models\Classroom;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Classroom>
 */
class ClassroomFactory extends Factory
{
    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'classroom_number' => fake()->unique()->numerify('###'),
            'floor' => fake()->numberBetween(1, 5),
            'capacity' => fake()->numberBetween(10, 80),
            'building_id' => Building::factory(),
        ];
    }
}
