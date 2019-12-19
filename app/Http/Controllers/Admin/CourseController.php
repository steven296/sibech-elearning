<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection as Collection;

use App\Category;
use App\Course;
use App\Goal;
use App\Requirement;
use App\Tema;
use App\Lesson;
use App\Level;
use App\Teacher;

class CourseController extends Controller
{
    public function index(Request $request) {
        $courseStudent = DB::select("select c.name as 'Curso',u.name as 'Usuario',cs.* from courses c,users u,course_student cs where cs.student_id = u.id and cs.course_id = c.id and cs.status=2");
        // dd($request->get('orderBy'));
        $courses = Course::status($request->get('orderBy'))->orderBy('created_at','desc')->paginate();
        return view('admin.courses.index',compact('courses','courseStudent'));
    }

    public function create() {
        $courseStudent = DB::select("select c.name as 'Curso',u.name as 'Usuario',cs.* from courses c,users u,course_student cs where cs.student_id = u.id and cs.course_id = c.id and cs.status=2");
        
        $categories = Category::all();
        $levels = Level::all();
        return view('admin.courses.create', compact('categories','levels', 'courseStudent'));
    }

    public function store(Request $request) {

        
         /* Guardando imagen en la carpeta "public/storage/vouchers/" */
        $image = $request->file('picture');
        
        $imageName = $image->getClientOriginalName();
        $image->move(public_path('storage/courses'),$imageName);

        $course = new Course();
        $course->teacher_id=auth()->user()->id;
        $course->category_id=$request->get('category_id');
        $course->level_id=$request->get('level_id');
        $course->name=$request->get('name');
        $course->description=$request->get('description');
        $course->slug=str_slug('-',$request->get('name'));
        $course->price=$request->get('price');
        $course->picture = $imageName; 
        $course->status=1;

        $course->save();
        
        $count = $request->meta;
        
        for($i=0;$i<count($count);$i++){
            $goals = new Goal();
            $goals->course_id=$course->id;
            $goals->goal=$request->meta[$i];
            $goals->save();
        }
        
        
        $count_rq = $request->requirement;
        for($i=0;$i<count($count_rq);$i++){
            $requirements = new Requirement;
            $requirements->course_id=$course->id;
            $requirements->requirement=$request->requirement[$i];
            $requirements->save();
        }

        $count_tm = $request->seccion;
        $count_cl = $request->clase;
        $count_url = $request->url;
        

        for($i=0;$i<count($count_tm);$i++){
            $temas = new Tema;
            $temas->course_id=$course->id;
            $temas->name=$request->seccion[$i];
            $temas->save();
            
            for($k=0;$k<count($count_cl);$k++){
                $lesson = new Lesson;
                $lesson->tema_id=$temas->id;
                $lesson->name=$request->clase[$i][$k];
                $lesson->description='hola mundo';
                $lesson->video=$request->url[$i][$k];
                $lesson->save();
            }
        }
        
        return redirect('/dash/cursos');
    }

    public function edit($id){

        $courseStudent = DB::select("select c.name as 'Curso',u.name as 'Usuario',cs.* from courses c,users u,course_student cs where cs.student_id = u.id and cs.course_id = c.id and cs.status=2");
        
        $array_clases=array();
        
        $course = Course::find($id);
        $goals = Goal::where('course_id',$id)->get();
        $requirements = Requirement::where('course_id',$id)->get();
        $temas = Tema::where('course_id',$id)->get();
        $categorias = Category::all();
        $nivel = Level::all();
    
        foreach($temas as $tema){
            $clases = Lesson::where('tema_id',$tema->id)->get();
            $array_clases=Arr::prepend($array_clases,$clases);
        }
        
        
        return view('admin.courses.edit',compact('courseStudent','array_clases','temas','categorias','nivel','course','goals','requirements'));
    }

    public function update(Request $request, $id){
        
        $course = Course::find($id);
        
        $course->teacher_id=$request->get('teacher_id');
        $course->category_id=$request->get('category_id');
        $course->level_id=$request->get('level_id');
        $course->name=$request->get('name');
        $course->description=$request->get('description');
        $course->slug=str_slug('-',$request->get('name'));
        $course->price=$request->get('price');
        if($request->hasFile('picture')){
            $image = $request->file('picture');
            $file = $image->store('courses');
            $course->picture=$file;
        }else{
            $course->picture=$request->get('imagen');    
        }
        $course->status=1;
        $course->save();   

        //Eliminando los antiguos registros de los requisitos
        $ex_requirements = Requirement::where('course_id',$id);
        $ex_requirements->delete();
        //Insertando nuevos registros
        $count_rq = $request->requirement;
        for($i=0;$i<count($count_rq);$i++){
            $requirements = new Requirement; 
            $requirements->course_id=$course->id;
            $requirements->requirement=$request->requirement[$i];
            $requirements->save();
        }
        
        //Eliminando los antiguos registros de las metas
        $ex_goals = Goal::where('course_id',$id);
        $ex_goals->delete();
        //Insertando nuevos registros
        $count_go = $request->meta;
        for($i=0;$i<count($count_go);$i++){
            $goals = new Goal;
            $goals->course_id=$course->id;
            $goals->goal=$request->meta[$i];
            $goals->save(); 
        }
        
        /*
        //Eliminando los antiguos registros de los temas
        $ex_temas = Tema::where('course_id',$id);
        $ex_temas->delete();
        //Insertando nuevos registros
        $count_tm = $request->seccion;
        $count_cl = $request->clase;
        $count_url = $request->url;
        for($i=0;$i<count($count_tm);$i++){
            $temas = new Tema;
            $temas->course_id=$course->id;
            $temas->name=$request->seccion[$i];
            $temas->save();
            
            for($k=0;$k<count($count_cl);$k++){
                $lesson = new Lesson;
                $lesson->tema_id=$temas->id;
                $lesson->name=$request->clase[$i][$k];
                $lesson->description='hola mundo';
                $lesson->video=$request->url[$i][$k];
                $lesson->save();
            }
        }    
        */
        return redirect('/dash/cursos');
    }

    public function updateStatus(Request $request,$id){
        $course = Course::find($id);
        $course->status=$request->get('status');

        $course->save();

        return redirect('/dash/cursos');
    }

    public function pdf(){
        $courses = Course::with('category','teacher','reviews')->get();
  
        $view = view('admin.reports.courses.show',compact('courses'));
  
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('admin.reports');
      }
}
