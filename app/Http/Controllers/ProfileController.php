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
}
