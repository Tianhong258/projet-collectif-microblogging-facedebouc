<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
=======
use App\Models\Post;
>>>>>>> 8ffa8d33408b6a1d9ea01eb2da40fa9604acd591
use Illuminate\Http\Request;

class PostController extends Controller
{
<<<<<<< HEAD
    //
=======
    public function show($id){
        $post = Post::findOrFail($id);
        return view("posts.show", ["post"=> $post]);
    }
>>>>>>> 8ffa8d33408b6a1d9ea01eb2da40fa9604acd591
}
