<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class CourseController extends Controller
{
    public function index() {
        
        return view('admin.courses.index');
    }

    public function create() {
        $categories = Category::all();
        return view('admin.courses.create', compact('categories'));
    }

    public function store(Request $request) {
        dd($request);
    }
}
