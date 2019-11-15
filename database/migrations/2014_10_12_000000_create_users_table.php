<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
    		$table->increments('id');
    		$table->string('name')->comment('Nombre del rol de usuario');
    		$table->text('description');
    		$table->timestamps();
	    });

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('role_id')->default(\App\Role::STUDENT);
			$table->foreign('role_id')->references('id')->on('roles');
            $table->string('name');
	        $table->string('last_name')->nullable();
	        $table->string('slug');
            $table->string('email')->unique();
            $table->string('password')->nullable();
	        $table->string('picture')->nullable();

	        //cashier columns
	        // $table->string('stripe_id')->nullable();
	        // $table->string('card_brand')->nullable();
	        // $table->string('card_last_four')->nullable();
	        // $table->timestamp('trial_ends_at')->nullable();

	        $table->rememberToken();
	        $table->timestamps();
        });

        Schema::create('auditoria_user',function(Blueprint $table){
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamp('fecha')->nullable();
            $table->string('dato_nuevo');
            $table->string('dato_anterior');
        });

        Schema::create('bitacora',function (Blueprint $table){
            $table->increments('id');
            $table->unsignedInteger('user');
            $table->string('dato');
            $table->string('accion');
            $table->string('tabla');
            $table->timestamp('fecha_accion')->nullable();
        });		
	   
	    Schema::create('user_social_accounts', function(Blueprint $table)
	    {
		    $table->increments('id');
		    $table->unsignedInteger('user_id');
		    $table->foreign('user_id')->references('id')->on('users');
		    $table->string('provider');
		    $table->string('provider_uid');
	    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('roles');
        Schema::dropIfExists('user_social_accounts');
    }
}
