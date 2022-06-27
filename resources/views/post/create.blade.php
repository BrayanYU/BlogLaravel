<x-app-layout>
    <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create a post') }}
        </h2>
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
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                @foreach ($errors->all() as $error)
                    <span class="block text-red-500">{{ $error }}</span>
                @endforeach

                <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <x-label for="title" value="Post title" class="mb-2" style="
                        font-size: 16px;
                    "/>
                    <x-input id="title" name="title" class="mb-4" style="
                        width: 40%;
                        height: 40px;
                        padding: 4px;
                        border: 2px solid #ccc;
                        border-radius: 4px;
                        background-color: #f8f8f8;
                        font-size: 16px;
                        resize: none;"/>

                    <x-label for="content" value="Post content" class="mb-2" style="
                        font-size: 16px;
                    "/>
                    <textarea rows="6" cols="65" id="content" name="content" class="mb-2" style="
                        height: 150px;
                        padding: 4px;
                        border: 2px solid #ccc;
                        border-radius: 4px;
                        background-color: #f8f8f8;
                        font-size: 16px;
                        resize: none;">
                    </textarea>

                    <x-label for="image" value="Post image" style="
                        font-size: 16px;
                    "/>
                    <x-input type="file" id="image" name="image" />

                    <x-label for="category" value="Post category" class="mb-2 mt-2" style="
                        font-size: 16px;
                    "/>
                    <select name="category" id="category" class="mb-4 form-select form-select-sm
                        appearance-none
                        block
                        w-full
                        px-2
                        py-1
                        text-sm
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding bg-no-repeat
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label=".form-select-sm example"
                        style="width: 20%; font-size: 16px">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    <x-button style="display: block !important" class="mt-5">Create a post</x-button>
                </form>
            </div>
        </body>
    </html>
</x-app-layout>