<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit post') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
<div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
    <div class="max-w-xl">
        <section>
            <header>
                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                    {{ __('Edit your post') }}
                </h2>
            </header>
            <form method="POST" action="{{ route('posts.update', $post) }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')


        <div class="mb-4">
            <x-input-label for="title" :value="__('Title')" />
            <textarea
                name="title" id="title"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-2"
            >{{ old('title', $post->title) }}</textarea>
            <x-input-error :messages="$errors->get('title')" class="mt-2" />


        <div class="mb-4">
            <x-input-label for="content" :value="__('Content')" />
            <textarea
                name="content" id="content"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-2"
            >{{ old('content', $post->content) }}</textarea>
            <x-input-error :messages="$errors->get('content')" class="mt-2" />
        </div>

        
    <div class="mt-4 space-x-2">
        <x-primary-button>{{ __('Save') }}</x-primary-button>
        <a href="{{ route('posts.show') }}">{{ __('Cancel') }}</a>
    </div>

    </form>
</section>

      
</div>
</div>
</div>
</div>
</x-app-layout>