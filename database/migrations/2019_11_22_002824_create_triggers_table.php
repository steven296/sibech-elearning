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
