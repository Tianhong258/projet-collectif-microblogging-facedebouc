<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-6" style="margin-left: 10%;" >
        
                    {{ __("You're logged in!") }}
            
    </div>
    <div style="margin-left: 10%; margin-bottom : 10px;">
        <a href="{{ route('posts.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Creat a post</a>
        <a href="{{ route('posts.show') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">My posts</a>
    </div>
    <div>
            @include('posts.index')
    </div>
</x-app-layout>
