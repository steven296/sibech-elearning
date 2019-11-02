<?php

namespace App\Policies;

use App\User;
use App\Role;
use App\Course;
use App\Suscripcion;
use Illuminate\Auth\Access\HandlesAuthorization;

class CoursePolicy
{
    use HandlesAuthorization;
    

    public function opt_for_course(User $user , Course $course){
        
        return ! $user->teacher || $user->teacher->id !== $course->teacher_id;
    }

    public function subscribe(User $user){
        $user_id=auth()->user()->id;
        $sub = Suscripcion::where('user_id',$user_id)->count();
        return $user->role_id !== Role::ADMIN && ! $sub>0;
    }
    /**
     * Determine whether the user can view any courses.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function view_if_subscribed(User $user)
    {

        $user_id=auth()->user()->id;

        $sub = Suscripcion::where('user_id',$user_id)->count();
        
        return $sub>0 || $user->role_id == Role::ADMIN;
    }

    /**
     * Determine whether the user can view the course.
     *
     * @param  \App\User  $user
     * @param  \App\Course  $course
     * @return mixed
     */
    
    public function view(User $user, Course $course)
    {
        return $user->teacher || $user->teacher->id==$course->teacher_id;       
    }

}
