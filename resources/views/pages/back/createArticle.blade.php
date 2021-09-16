<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Création d'article et gestion de ceux-ci") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('article.store') }}">
                        @csrf
                        <!-- Title -->
                        <div>
                            <x-label for="title" :value="__('Title')" />

                            <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')"
                                required autofocus />
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-label for="text" :value="__('Text')" />

                            <x-input id="text" class="block mt-1 w-full" type="text" name="text" :value="old('text')"
                                required />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-4">
                                {{ __('Create') }}
                            </x-button>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <section class="flex w-full justify-center "></section>
                    @foreach ($articles as $article)
                        <div class="w-100 text-center rounded my-20 border-8  bg-black  text-white ">
                            <div class="my-4">
                                <h1 class="text-3xl">
                                    {{ $article->title }}
                                </h1>
                            </div>
                            <div class="my-4">
                                <p>
                                    {{ $article->text }}
                                </p>
                            </div>
                            <h2 class="my-4">
                                {{ $article->users->name }}
                            </h2>
                            <div class="flex justify-between mt-5">
                                <form action="{{ route('article.destroy', $article->id) }}" method="POST"
                                    class="w-1/3 rounded">
                                    @csrf
                                    @method('DELETE')
                                    <button type='submit' class="text-white w-full  rounded bg-red-600">DELETE</button>
                                </form>
                                <a href="{{ route('article.show', $article->id) }}"
                                    class="text-white w-1/3 rounded bg-blue-600 text-center">
                                    SHOW
                                </a>
                                <a href="{{ route('article.edit', $article->id) }}"
                                    class="text-white w-1/3 rounded bg-yellow-300 text-center">
                                    EDIT
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
