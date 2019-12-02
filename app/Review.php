<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['course_id', 'user_id', 'rating', 'comment','status'];

	const PUBLISHED = 1;
	const REJECTED = 2;

    public function course () {
    	return $this->belongsTo(Course::class);
    }

	public function user () {
		return $this->belongsTo(User::class);
	}
}
