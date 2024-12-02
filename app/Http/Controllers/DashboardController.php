<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class DashboardController extends Controller
{
    public function index()
    {
        $students = Student::with(['Grade', 'department'])->get();
        return view('/dashboard', ['title' => 'Dashboard', 'students' => $students,], );
    }
}
