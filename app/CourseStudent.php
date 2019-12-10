<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseStudent extends Model
{
    const ACCEPTED = 1;
    const PENDING = 2;
    const REJECTED = 3;
    
    protected $table ='course_student';
    public $timestamps=false;
    protected $fillable = [
        'course_id', 'user_id', 'num_operacion','nombre_banco','voucher','status'
    ];

}
