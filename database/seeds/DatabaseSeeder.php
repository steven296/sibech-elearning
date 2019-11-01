<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('courses');
        Storage::deleteDirectory('users');

        Storage::makeDirectory('courses');
        Storage::makeDirectory('users');

        factory(\App\Role::class, 1)->create(['name' => 'admin']);
        factory(\App\Role::class, 1)->create(['name' => 'teacher']);
        factory(\App\Role::class, 1)->create(['name' => 'student']);

        factory(\App\User::class, 1)->create([
        	'name' => 'admin',
	        'email' => 'admin@hotmail.com',
	        'password' => bcrypt('123123'),
	        'role_id' => \App\Role::ADMIN
        ])
        ->each(function (\App\User $u) {
        	factory(\App\Student::class, 1)->create(['user_id' => $u->id]);
        });

	    factory(\App\User::class, 1)->create([
		    'name' => 'student',
		    'email' => 'student@hotmail.com',
		    'password' => bcrypt('123123'),
		    'role_id' => \App\Role::STUDENT
	    ])
	        ->each(function (\App\User $u) {
	            factory(\App\Student::class, 1)->create(['user_id' => $u->id]);
	        });

	    factory(\App\User::class, 30)->create()
             ->each(function (\App\User $u) {
                 factory(\App\Student::class, 1)->create(['user_id' => $u->id]);
             });

	    factory(\App\User::class, 10)->create()
             ->each(function (\App\User $u) {
	             factory(\App\Student::class, 1)->create(['user_id' => $u->id]);
                 factory(\App\Teacher::class, 1)->create(['user_id' => $u->id]);
             });

	    factory(\App\Level::class, 1)->create(['name' => 'Basico']);
	    factory(\App\Level::class, 1)->create(['name' => 'Intermedio']);
	    factory(\App\Level::class, 1)->create(['name' => 'Avanzado']);
	    factory(\App\Category::class, 5)->create();

	    factory(\App\Course::class, 40)
		    ->create()
		    ->each(function (\App\Course $c) {
		    	$c->goals()->saveMany(factory(\App\Goal::class, 2)->create());
				$c->requirements()->saveMany(factory(\App\Requirement::class, 4)->create());
		    });
    }
}
