<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\grade;

class GradeAdminController extends Controller
{
    public function index()
    {
        $grades = Grade::all();
        return view('grade-admin', [
            'title' => 'Grade',
            'gradesadmin' => $grades->load(['students', 'department'])
        ]);
    }

}
