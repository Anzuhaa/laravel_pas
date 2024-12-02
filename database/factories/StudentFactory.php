<?php

namespace Database\Factories;

use App\Models\grade;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Department;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name($gender = 'null'),
            'grade_id' => $gradeId = fake()->numberBetween(1, 36),
            'department_id' => function () use ($gradeId) {
                $grade = grade::find($gradeId);
                if ($grade) {
                    if (str_contains($grade->name, 'PPLG')) {
                        return Department::where('name', 'PPLG')->first()->id;
                    } elseif (preg_match('/ANIMASI (1|2|3)/', $grade->name)) {
                        return Department::where('name', 'ANIMASI 3D')->first()->id;
                    } elseif (preg_match('/ANIMASI (4|5)/', $grade->name)) {
                        return Department::where('name', 'ANIMASI 2D')->first()->id;
                    } elseif (preg_match('/DKV (1|2)/', $grade->name)) {
                        return Department::where('name', 'DKV DG')->first()->id;
                    } elseif (preg_match('/DKV (3|4|5)/', $grade->name)) {
                        return Department::where('name', 'DKV TG')->first()->id;
                    }
                }
                return null;
            },
            'email' => fake()->unique()->email(),
            'address' => fake()->address()
        ];
    }
}
