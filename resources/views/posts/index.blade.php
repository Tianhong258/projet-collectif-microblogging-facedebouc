<!-- resources/views/posts/index.blade.php -->
@foreach ($posts as $post)
    <div>
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->content }}</p>
    </div>
@endforeach
