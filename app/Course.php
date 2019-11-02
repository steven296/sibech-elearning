<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use SoftDeletes;

	protected $fillable = ['teacher_id', 'name', 'description', 'picture', 'level_id', 'category_id', 'status'];

	const PUBLISHED = 1;
	const PENDING = 2;
	const REJECTED = 3;

    protected $withCount = ['reviews', 'students'];
    
	public static function boot () {
		parent::boot();

		static::saving(function(Course $course) {
			if( ! \App::runningInConsole() ) {
				$course->slug = str_slug($course->name, "-");
			}
		});

		static::saved(function (Course $course) {
			if ( ! \App::runningInConsole()) {
				if ( request('requirements')) {
					foreach (request('requirements') as $key => $requirement_input) {
						if ($requirement_input) {
							Requirement::updateOrCreate(['id' => request('requirement_id'. $key)], [
								'course_id' => $course->id,
								'requirement' => $requirement_input
							]);
						}
					}
				}

				if(request('goals')) {
					foreach(request('goals') as $key => $goal_input) {
						if( $goal_input) {
							Goal::updateOrCreate(['id' => request('goal_id'.$key)], [
								'course_id' => $course->id,
								'goal' => $goal_input
							]);
						}
					}
				}
			}
		});
	}

	public function pathAttachment () {
		return "/storage/courses/" . $this->picture;
	}
    
    public function category () {
		return $this->belongsTo(Category::class);
	}

	public function goals () {
		return $this->hasMany(Goal::class)->select('id', 'course_id', 'goal');
	}

	public function level () {
		return $this->belongsTo(Level::class)->select('id', 'name');
	}

	public function reviews () {
		return $this->hasMany(Review::class)->select('id', 'user_id', 'course_id', 'rating', 'comment', 'created_at');
	}

	public function requirements () {
		return $this->hasMany(Requirement::class)->select('id', 'course_id', 'requirement');
	}

	public function students () {
		return $this->belongsToMany(Student::class);
	}

	public function teacher () {
		return $this->belongsTo(Teacher::class);
	}

	public function temas () {
		return $this->hasMany(Tema::class);
	}


	// Estrellas de Calificacion

	public function getCustomRatingAttribute () {
		return $this->reviews->avg('rating');
	}

	public function getCountRatingAttribute () {
		return $this->reviews->count('rating');
	}

	public function getRatingPercent5Attribute () {
		return $this->RatingPercentages('5');
	}
	public function getRatingPercent4Attribute () {
		return $this->RatingPercentages('4');
	}
	public function getRatingPercent3Attribute () {
		return $this->RatingPercentages('3');
	}
	public function getRatingPercent2Attribute () {
		return $this->RatingPercentages('2');
	}
	public function getRatingPercent1Attribute () {
		return $this->RatingPercentages('1');
	}

	public function RatingPercentages($star) {
		$total = $this->reviews->count('rating');
		$cant = $this->reviews->where('rating', $star)->count('rating');
		if($total != 0){
			return (intval($cant/$total*100));
		}else{
			return 0;
		}
	}

	// Estudiantes inscritos al curso
	public function getCountStudentsAttribute () {
		return $this->students->count('name');
	}
}
