<?php

namespace App\Http\Controllers;

use App\Course;
use App\Category;
use Illuminate\Http\Request;

class CourseController extends Controller
{
  /*
    public function index (Course $course) {
      
      $courses = Course::withCount(['students'])
		    ->with('category', 'teacher', 'reviews')
		    ->where('status', Course::PUBLISHED)
		    ->latest()
        ->paginate(12);
      
      $categories = Category::withCount(['courses'])
        ->latest()
        ->get();
        
      return view('courses.courses_list', compact('courses', 'categories'));
    }
  */
    public function index (Category $categoria) {
      
      $courses = Course::with('category', 'teacher', 'reviews')
		    ->where('category_id', $categoria->id)
		    ->latest()
        ->paginate(12);
      
      $categories = Category::withCount(['courses'])
        ->latest()
        ->get();

      return view('courses.courses_list', compact('courses', 'categories'));
    }

    public function show (Course $curso) {

      $categories = Category::withCount(['courses'])
        ->latest()
        ->get();
        
		  return view('courses.detail', compact('curso', 'categories'));
    }
    
    public function subscribed () {
    
      $categories = Category::withCount(['courses'])
        ->latest()
        ->get();

		return view('courses.subscribed', compact('categories'));
	}
}
