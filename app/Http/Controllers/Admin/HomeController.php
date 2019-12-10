<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

use App\CourseStudent;
use App\User;

class HomeController extends Controller
{
    public function index()
    {
        $courseStudent = DB::select("select c.name as 'Curso',u.name as 'Usuario',cs.voucher,cs.id,cs.student_id,cs.course_id, cs.status,cs.created_at from courses c,users u,course_student cs where cs.student_id = u.id and cs.course_id = c.id and cs.status=2");
        return view('admin.home',compact('courseStudent'));
    }
}
