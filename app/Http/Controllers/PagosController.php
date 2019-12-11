<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CourseStudent;
use App\Category;
class PagosController extends Controller
{
    public function show($id){

        $pagos = CourseStudent::all();
        $categories = Category::withCount(['courses'])
        ->latest()
        ->get();

        $pagoforStudent = CourseStudent::join('courses','courses.id','course_student.course_id')
        ->join('users','users.id','course_student.student_id')
        ->select(['course_student.*','courses.name as Curso','courses.price','users.name as Usuario'])
        ->where('course_student.student_id',$id)
        ->orderBy('course_student.created_at','desc')
        ->get();

        
        return view('pagos.show',compact('pagos','categories','pagoforStudent'));
    }
}
