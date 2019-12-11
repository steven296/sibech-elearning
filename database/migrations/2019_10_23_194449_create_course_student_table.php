<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_student', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('course_id');
	        $table->foreign('course_id')->references('id')->on('courses');
	        $table->unsignedInteger('student_id');
            $table->foreign('student_id')->references('id')->on('students');
            $table->string('num_operacion');
            $table->string('nombre_banco');
            $table->string('voucher')->nullable();
            $table->enum('status', [
	        	\App\CourseStudent::ACCEPTED, \App\CourseStudent::PENDING, \App\CourseStudent::REJECTED
	        ])->default(\App\CourseStudent::PENDING);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_student');
    }
}
