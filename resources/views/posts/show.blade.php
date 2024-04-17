<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Welcome to my wall')}}
        </h2>
    </x-slot>
@foreach ($posts as $post)
<div class="py-3">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <h1 class="text-xl font-bold">{{ $post->title }}</h1>
                    <p>{{ $post->content }}</p>
                    @if ( $post->created_at == $post->updated_at)
                      <p>Created at {{ $post->created_at }}</p>
                    @else <p>Edited at {{ $post->updated_at }}</p>
                    @endif
                    <a href="{{ route('posts.showPostAuteur', $post->user)}}">By {{ $post->user->name }}</p>
                    @if((Auth::user() && Auth::user()->id === $post->user_id))
                    <div class="py-3 flex items-center">
                    <a href="{{ route('posts.edit', $post->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Modifier</a>
                    <form method="POST" action="{{ route('posts.destroy', $post) }}" style="margin-left: 10px;">
                        @csrf
                        @method('delete')
                        <a href="route('posts.destroy', $post)" onclick="event.preventDefault(); this.closest('form').submit();">
                            {{ __('Delete') }}
                        </a>
                    </form>
                </div>
                @endif
                </div>

        </div>
    </div>
</div>
@endforeach
</x-app-layout>