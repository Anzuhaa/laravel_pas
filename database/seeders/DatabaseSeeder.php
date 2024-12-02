<?php

namespace Database\Seeders;

use App\Models\grade;
use App\Models\student;
use App\Models\Department;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Department::factory(5)->create();
        grade::factory(36)->create();
        student::factory(200)->create();

    }
}
