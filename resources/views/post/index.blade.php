<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <link href="https://unpkg.com/tailwindcss@2.2.4/dist/tailwind.min.css" rel="stylesheet">
        </head>
        <body>
            <section class="h-screen w-screen to-indigo-100 p-8">
                <h1 class="text-center font-bold text-4xl text-indigo-400">Blog </h1>

                <div class="grid justify-center md:grid-cols-2 lg:grid-cols-3 gap-5 lg:gap-7 my-10">
                    @foreach ($posts as $post)
                    <div class="bg-white rounded-lg border shadow-md max-w-xs md:max-w-none overflow-hidden">
                        <img class="h-56 lg:h-60 w-full object-cover" src="{{ asset('storage/' . $post->image) }}" alt="" />
                        <div class="p-3">
                            <div class="flex items-center justify-between">
                                <span class="text-sm text-primary">{{ $post->created_at->format('d M Y') }}</span>
                                <a href="#" class="px-2 py-1 font-bold text-gray-100 bg-gray-600 rounded hover:bg-gray-500">{{ $post->category->name }}
                                </a>
                            </div>
                            <h3 class="font-semibold text-xl leading-6 text-gray-700 my-2">
                            {{ $post->title }}
                            </h3>
                            <p class="mb-3 paragraph-normal text-gray-600">
                            {{ Str::limit($post->content, 120) }}
                            </p>
                            <div class="flex items-center justify-between">
                                <a href="{{ route('posts.show', $post) }}" class="px-2 py-1 font-bold text-gray-100 bg-gray-600 rounded hover:bg-gray-500">Read More
                                </a>
                                <a class="mt-3 block font-semibold" href="#">{{ $post->user->name }}</a>
                            </div>
                        </div>
                    </div> 
                    @endforeach
                </div>
            </section>
        </body>
    </html>
</x-app-layout>