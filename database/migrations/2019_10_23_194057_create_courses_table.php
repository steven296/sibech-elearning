<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
	        $table->unsignedInteger('teacher_id');
	        $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('cascade')->onUpdate('cascade');
	        $table->unsignedInteger('category_id');
	        $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
	        $table->unsignedInteger('level_id');
	        $table->foreign('level_id')->references('id')->on('levels')->onDelete('cascade')->onUpdate('cascade');
	        $table->string('name')->unique();
	        $table->text('description');
            $table->string('slug');
            $table->integer('price');
	        $table->string('picture')->nullable();
	        $table->enum('status', [
	        	\App\Course::PUBLISHED, \App\Course::PENDING, \App\Course::REJECTED
	        ])->default(\App\Course::PENDING);
	        $table->boolean('previous_approved')->default(false);
	        $table->boolean('previous_rejected')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
