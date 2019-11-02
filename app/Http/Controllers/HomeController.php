<?php

namespace App\Http\Controllers;

use App\Category;
use App\Course;
use App\Teacher;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    	$courses = Course::withCount(['students'])
		    ->with('category', 'teacher', 'reviews')
		    ->where('status', Course::PUBLISHED)
		    ->latest()
            ->paginate(6);
        
        $categories = Category::withCount(['courses'])
            ->latest()
            ->get();

        return view('home', compact('courses', 'categories'));
    }
}
