<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hero;
use App\Models\Post;

class LandingController extends Controller
{
    // Index Function
    public function index()
    {
        // Retrieve the Hero
        $hero = Hero::all();

        // Retrieve the Latest Posts
        $posts = Post::all();

        return view('landing.welcome', compact('hero', 'posts'));
    }
}
