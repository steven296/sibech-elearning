<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Arr;
use App\CourseStudent;
use App\User;

class HomeController extends Controller
{
    public function index()
    {
        $courseStudent = CourseStudent::where('status',CourseStudent::PENDING)->get();
        
        return view('admin.home',compact('courseStudent'));
    }
}
