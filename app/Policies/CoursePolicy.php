<?php

namespace App\Policies;

use App\User;
use App\Role;
use App\Student;
use App\Course;
use App\Suscripcion;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\DB;

class CoursePolicy
{
    use HandlesAuthorization;
    

    public function opt_for_course(User $user , Course $course){
        
        return ! $user->teacher || $user->teacher->id !== $course->teacher_id;
    }

    public function buy(User $user,Course $course){
        $user_id=auth()->user()->id;

        $sql1 = DB::select("select count(course_student.course_id) as 'num' from students,course_student,courses where courses.id=? and course_student.course_id=courses.id and course_student.student_id=students.id and students.user_id=?",[$course->id,$user_id]);
        
        // $course_for_student = DB::table('course_student')
        // ->join('courses','course_id','courses.id')
        // ->join('students','student_id','students.id')
        // ->select('course_student.course_id')
        // ->where('courses.id','course_student.course_id')
        // ->where('students.id','course_student.student_id')
        // ->where('students.user_id',$user_id)
        // ->where('courses.id',$course->id)
        // ->count();

        
        return $user->role_id !== Role::ADMIN && $sql1[0]->num==0;
    }

    public function subscribe(User $user){
        $user_id=auth()->user()->id;
        $status = Suscripcion::where('user_id',$user_id)->get('status');
        $sub = Suscripcion::where('user_id',$user_id)->count();
        return $user->role_id !== Role::ADMIN && ! $sub>0;
    }

    public function view_if_buy(User $user,Course $course)
    {

        $user_id=auth()->user()->id;
        $sql1 = DB::select("select count(course_student.course_id) as 'num' from students,course_student,courses where courses.id=? and course_student.course_id=courses.id and course_student.student_id=students.id and students.user_id=?",[$course->id,$user_id]);
        
        return ($sql1[0]->num>0) || $user->role_id == Role::ADMIN;
    }

    
    public function view(User $user, Course $course)
    {
        return  $user->teacher && $user->teacher->id == $course->teacher_id;      
    }

    public function comment(User $user,Course $course){
        $user_id=auth()->user()->id;
        $sql1 = DB::select("select count(course_student.course_id) as 'num' from students,course_student,courses where courses.id=? and course_student.course_id=courses.id and course_student.student_id=students.id and students.user_id=?",[$course->id,$user_id]);
        
        return ($user->teacher && $user->teacher->id == $course->teacher_id) || ($sql1[0]->num>0) || $user->role_id == Role::ADMIN;
    }

}
