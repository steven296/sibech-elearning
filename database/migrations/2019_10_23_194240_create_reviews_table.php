<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id');
	        $table->unsignedInteger('course_id');
	        $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade')->onUpdate('cascade');
	        $table->unsignedInteger('user_id');
	        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
	        $table->integer('rating');
            $table->text('comment')->nullable();
            $table->enum('status', [
	        	\App\Review::PUBLISHED, \App\Review::REJECTED
	        ])->default(\App\Review::PUBLISHED);
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
        Schema::dropIfExists('reviews');
    }
}
