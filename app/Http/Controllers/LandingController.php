<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hero;
use App\Models\Post;
use Auth;
use App\User;

class LandingController extends Controller
{
    // Index Function
    public function index()
    {
        // Retrieve the Hero
        $hero = Hero::all();

        // Retrieve the Latest Posts
        $posts = Post::orderBy('updated_at', 'desc')->take(4)->get();

        return view('landing.welcome', compact('hero', 'posts'));
    }

    public function contact()
    {   
        $users = User::paginate(5);
        return view('landing.contact', compact('users'));
    }
}
