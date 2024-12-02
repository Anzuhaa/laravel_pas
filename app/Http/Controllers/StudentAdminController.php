<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use App\Models\grade;

class StudentAdminController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $query = Student::with(['Grade', 'Department']);

        if ($search) {
            $query->where('name', 'like', "%{$search}%")
                ->orWhereHas('Grade', function ($query) use ($search) {
                    $query->where('name', 'like', "%{$search}%");
                });
        }

        $students = $query->get();
        $grades = Grade::all();

        return view('students-admin', [
            'title' => 'Student',
            'students' => $students,
            'grades' => $grades,
        ]);
    }
}
