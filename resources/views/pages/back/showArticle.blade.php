<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Article') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="w-100 text-center rounded my-20 border-8  bg-black  text-white ">
                        <div class="my-4">
                            <h1 class="text-3xl">
                                {{$article->title}}
                            </h1>
                        </div>
                        <div class="my-4">
                            <p>
                                {{$article->text}}
                            </p>
                        </div>
                        <h2 class="my-4">
                            {{$article->users->name}}
                        </h2>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
