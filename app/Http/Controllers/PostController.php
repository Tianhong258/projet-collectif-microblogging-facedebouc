<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;


class PostController extends Controller
{

    public function show()
{
    // Récupérer l'utilisateur connecté
    $user = Auth::user();
    // Récupérer tous les posts de l'utilisateur connecté
    $posts = $user->posts;
    return view('posts.show', compact('posts'));
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
    // Récupérer tous les posts
        $posts = Post::with('user')->get();
        return view('posts.index', compact('posts'));
    }

    public function destroy(Post $post): RedirectResponse
    {
        //
        Gate::authorize('delete', $post);
 
        $post->delete();
 
        return redirect(route('posts.show'));
    }

    public function update(Request $request, Post $post): RedirectResponse
    {   
        Gate::authorize('update', $post);
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string|max:255',
        ]);
        $post->update($validated);
        return redirect(route('posts.show'));
    }

    public function edit(Post $post):View
    {
        Gate::authorize('update',$post);
        return view('posts.edit', [
            'post' => $post,
        ]);
    }


    public function showPostAuteur(User $user)
{
        // Récupérer tous les posts de l'utilisateur
        $posts = $user->posts()->get();
        
        // Passer les posts récupérés à la vue pour les afficher
        return view('posts.show', compact('posts'));
    }
}

