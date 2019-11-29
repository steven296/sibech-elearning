<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTriggersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bitacora_user',function(Blueprint $table){
            $table->increments('id');
            $table->string('name_nuevo')->nullable();
            $table->string('name_antiguo')->nullable();
            $table->string('last_name_nuevo')->nullable();
            $table->string('last_name_antiguo')->nullable();
            $table->string('email_nuevo')->nullable();
            $table->string('email_antiguo')->nullable();
            $table->string('password_nuevo')->nullable();
            $table->string('password_antiguo')->nullable();
            $table->unsignedInteger('user_id');
            $table->string('action');
            $table->timestamp('created_at');
        });

        Schema::create('bitacora_category',function(Blueprint $table){
            $table->increments('id');
            $table->string('name_nuevo')->nullable();
            $table->string('name_antiguo')->nullable();
            $table->string('description_nuevo')->nullable();
            $table->string('description_antiguo')->nullable();
            $table->unsignedInteger('category_id');
            $table->string('action');
            $table->timestamp('created_at');
        });
        Schema::create('bitacora_category',function(Blueprint $table){
            $table->increments('id');
            $table->string('teacher_id_nuevo')->nullable();
            $table->string('teacher_id_antiguo')->nullable();
            $table->string('category_id_nuevo')->nullable();
            $table->string('category_id_antiguo')->nullable();
            $table->string('level_id_nuevo')->nullable();
            $table->string('level_id_antiguo')->nullable();
            $table->string('name_nuevo')->nullable();
            $table->string('name_antiguo')->nullable();
            $table->string('description_nuevo')->nullable();
            $table->string('description_antiguo')->nullable();
            $table->string('slug_nuevo')->nullable();
            $table->string('slug_antiguo')->nullable();
            $table->string('price_nuevo')->nullable();
            $table->string('price_antiguo')->nullable();
            $table->string('picture_nuevo')->nullable();
            $table->string('picture_antiguo')->nullable();
            $table->string('status_nuevo')->nullable();
            $table->string('status_antiguo')->nullable();
            $table->unsignedInteger('course_id');
            $table->string('action');
            $table->timestamp('created_at');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bitacora_user');
    }
}
