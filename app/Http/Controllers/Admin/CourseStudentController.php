<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\CourseStudent;

class CourseStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courseStudent = DB::select("select c.name as 'Curso',u.name as 'Usuario',cs.* from courses c,users u,course_student cs where cs.student_id = u.id and cs.course_id = c.id and cs.status=2");
        return view('admin.notification.index',compact('courseStudent'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $courseStudent = DB::select("select c.name as 'Curso',u.name as 'Usuario',cs.* from courses c,users u,course_student cs where cs.student_id = u.id and cs.course_id = c.id and cs.status=2");
        $courseStudentOne = DB::select("select c.name as 'Curso',u.name as 'Usuario',cs.* from courses c,users u,course_student cs where cs.student_id = u.id and cs.course_id = c.id and cs.status=2 and cs.id=$id");
        
        return view('admin.notification.show',compact('courseStudent','courseStudentOne'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateStatus(Request $request, $id)
    {

        $courseStudent = CourseStudent::where('id',$id)->update(['status'=>$request->get('status')]);
        
        return redirect('/dash/notification');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
