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
<<<<<<< HEAD
    //
=======
    public function show($id){
        $post = Post::findOrFail($id);
        return view("posts.show", ["post"=> $post]);
    }
>>>>>>> 8ffa8d33408b6a1d9ea01eb2da40fa9604acd591
=======
    public function show($id)
    {
        $post = Post::findOrFail($id); // Récupérer le Post par son ID
        return view('posts.show', ['post' => $post]); // Retourner la vue avec les données du Post
    }

    public function store(Request $request)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            
        ]);

        if(auth()->check()) {
            // Remplir automatiquement le champ 'user_id' avec l'ID de l'utilisateur authentifié
            $validatedData['user_id'] = auth()->user()->id;
            
            // Créer un nouveau post avec les données validées
            $post = Post::create($validatedData);
    
            // Rediriger vers une autre page ou afficher un message de succès
            return redirect()->route('posts.show', ['id' => $post->id])->with('success', 'Post créé avec succès!');
        } else {
            // Gérer le cas où aucun utilisateur n'est authentifié
            return redirect()->back()->with('error', 'Vous devez être connecté pour créer un post.');
        }
    }

    public function create()
    {

        return view('posts.create');
    }
    

    public function index()
{
    $posts = Post::all(); // Récupérer tous les posts
    return view('posts.index', ['posts' => $posts]);
}

>>>>>>> d2e8c8e13c96d8a49aa1e346e5eb0587b56fbc79
}
