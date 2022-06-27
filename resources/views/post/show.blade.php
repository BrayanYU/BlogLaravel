<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $post->title }}
        </h2>
        <h3 class="mt-2 font-semibold text-xl text-gray-400 leading-tight">
            {{ $post->user->name }}
        </h3>
    </x-slot>

    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8" style="
        width: 60%;
    ">
        <img src="{{ asset('storage/' . $post->image) }}" alt="" class="mb-4 mx-auto">
        {{ $post->content }}
    </div>
</x-app-layout>