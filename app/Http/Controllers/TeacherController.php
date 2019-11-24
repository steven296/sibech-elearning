<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\Category;
use App\Course;

class TeacherController extends Controller
{
    public function show(Teacher $teacher) {
        $categories = Category::withCount(['courses'])
        ->latest()
        ->get();

        return view('teachers.detail', compact('teacher', 'categories'));
    }
}
