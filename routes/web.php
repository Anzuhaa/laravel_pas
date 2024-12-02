<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\GradeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentAdminController;
use App\Http\Controllers\GradeAdminController;
use App\Http\Controllers\DepartmentAdminController;


Route::get('/', function () {
    return view('welcome');
});

//users
Route::get('/home', [HomeController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/students', [StudentController::class, 'index']);
Route::get('/grades', [GradeController::class, 'index']);
Route::get('/departments', [DepartmentController::class, 'index']);

//admin
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/studentsadmin', [StudentAdminController::class, 'index',])->name('students-admin');
Route::get('/gradesadmin', [GradeAdminController::class, 'index']);
Route::get('/departmentsadmin', [DepartmentAdminController::class, 'index']);

