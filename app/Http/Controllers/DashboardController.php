<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $posts = Post::all(); // Récupérer tous les posts
        return view('dashboard',compact('posts'));
    }
}
