<?php

namespace App\Http\Controllers;

use App\User;
use App\Category;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $categories = Category::withCount(['courses'])
        ->latest()
        ->get();

        return view('profile.index', compact('categories'));
    }

    public function edit()
    {
        $categories = Category::withCount(['courses'])
        ->latest()
        ->get();
        
        return view('profile.edit', compact('categories'));
    }

    public function update(Request $request,$id){
        $user = User::find($id);
        $pass=$request->get('password');
        $conf_pass =$request->get('confirm_password');

        $msg='';
        if($pass==$conf_pass){
            $user->password=bcrypt($pass);
            $msg='Contraseña cambiada correctamente';
            $user->save();
            $sess='succes_pass';
        }else{
            $msg = 'La contraseña no es igual';
            $sess='error_pass';
        }

        
        return back()->with($sess,$msg);
        
    }
}
