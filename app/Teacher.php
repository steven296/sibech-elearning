<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = ['user_id','status'];

	const APPROVED = 1;
	const REJECTED = 3;
	const PENDING = 2;

	public function courses () {
		return $this->hasMany(Course::class);
	}

	public function user () {
		return $this->belongsTo(User::class);
	}

	// Cursos Registrados del Teacher
	public function getCountCoursesAttribute () {
		return $this->courses->count('name');
	}

	// Estudiantes inscritos a los cursos del Teacher
	public function getCountStudentsAttribute () {
		
		$students = 0;
		foreach($this->courses as $course){
			$students = $course->students->count('name') + $students;
		}
		return $students;
	}

	// Reseñas de todos los cursos del Teacher
	public function getCountReseñasAttribute () {
		
		$reseñas = 0;
		foreach($this->courses as $course){
			$reseñas = $course->reviews->count('comment') + $reseñas;
		}
		return $reseñas;
	}
}
