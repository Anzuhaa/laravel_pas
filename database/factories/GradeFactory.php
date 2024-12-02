<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Department;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Grade>
 */
class GradeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $gradeName = fake()->unique()->randomElement([
            '10 PPLG 1',
            '10 PPLG 2',
            '11 PPLG 1',
            '11 PPLG 2',
            '12 PPLG 1',
            '12 PPLG 2',
            '10 DKV 1',
            '10 DKV 2',
            '10 DKV 3',
            '10 DKV 4',
            '10 DKV 5',
            '11 DKV 1',
            '11 DKV 2',
            '11 DKV 3',
            '11 DKV 4',
            '11 DKV 5',
            '12 DKV 1',
            '12 DKV 2',
            '12 DKV 3',
            '12 DKV 4',
            '12 DKV 5',
            '10 ANIMASI 1',
            '10 ANIMASI 2',
            '10 ANIMASI 3',
            '10 ANIMASI 4',
            '10 ANIMASI 5',
            '11 ANIMASI 1',
            '11 ANIMASI 2',
            '11 ANIMASI 3',
            '11 ANIMASI 4',
            '11 ANIMASI 5',
            '12 ANIMASI 1',
            '12 ANIMASI 2',
            '12 ANIMASI 3',
            '12 ANIMASI 4',
            '12 ANIMASI 5',
        ]);

        $departmentId = null;

        if (str_contains($gradeName, 'PPLG')) {
            $departmentId = Department::where('name', 'PPLG')->value('id');
        } elseif (preg_match('/ANIMASI (1|2|3)/', $gradeName)) {
            $departmentId = Department::where('name', 'ANIMASI 3D')->value('id');
        } elseif (preg_match('/ANIMASI (4|5)/', $gradeName)) {
            $departmentId = Department::where('name', 'ANIMASI 2D')->value('id');
        } elseif (preg_match('/DKV (3|4|5)/', $gradeName)) {
            $departmentId = Department::where('name', 'DKV TG')->value('id');
        } elseif (preg_match('/DKV (1|2)/', $gradeName)) {
            $departmentId = Department::where('name', 'DKV DG')->value('id');
        }
        return [
            'name' => $gradeName,
            'department_id' => $departmentId
        ];

    }
}
