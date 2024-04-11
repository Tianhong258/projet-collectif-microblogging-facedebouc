<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Titre du post">
    <textarea name="content" placeholder="Contenu du post"></textarea>
    <button type="submit">Créer le post</button>
</form>

