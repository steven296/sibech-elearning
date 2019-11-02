<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = ['tema_id', 'name', 'description', 'video'];

    public function tema () {
		return $this->belongsTo(Tema::class);
    }
}
