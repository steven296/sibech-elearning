<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courseStudent = DB::select("select c.name as 'Curso',u.name as 'Usuario',cs.* from courses c,users u,course_student cs where cs.student_id = u.id and cs.course_id = c.id and cs.status=2");
        
        $categories = Category::all();
        return view('admin.categories.index',compact('categories', 'courseStudent'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courseStudent = DB::select("select c.name as 'Curso',u.name as 'Usuario',cs.* from courses c,users u,course_student cs where cs.student_id = u.id and cs.course_id = c.id and cs.status=2");
        
        return view('admin.categories.create',compact('courseStudent'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Category($request->all());
        $category->save();

        return redirect('/dash/category');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        $courseStudent = DB::select("select c.name as 'Curso',u.name as 'Usuario',cs.* from courses c,users u,course_student cs where cs.student_id = u.id and cs.course_id = c.id and cs.status=2");
        
        return view('admin.categories.edit',compact('category', 'courseStudent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Category::find($id);

        $category->name=$request->get('name');
        $category->description=$request->get('description');

        $category->save();

        return redirect('/dash/category');
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
