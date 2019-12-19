<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

use App\CourseStudent;
use App\User;
use App\Teacher;
use App\Review;
use App\Course;
class HomeController extends Controller
{
    public function index()
    {
        $courseStudent = DB::select("select c.name as 'Curso',u.name as 'Usuario',cs.voucher,cs.id,cs.student_id,cs.course_id, cs.status,cs.created_at from courses c,users u,course_student cs where cs.student_id = u.id and cs.course_id = c.id and cs.status=2");
        $chart = DB::select("select country,count(country) as contador from users GROUP by country");

        $reviews = Review::whereMonth('created_at',now('m'))->count();
        $students = User::where('role_id',2)->whereMonth('created_at',NOW('m'))->count();
        $courses = Course::whereMonth('created_at',NOW('m'))->count();
        $teachers = Teacher::all();
        $cursos = Course::all();
        
        return view('admin.home',compact('courseStudent','chart','reviews','teachers','students','courses','cursos'));
    }
}
