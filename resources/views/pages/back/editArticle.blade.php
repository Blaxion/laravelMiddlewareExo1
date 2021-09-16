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
                    <form method="POST" action="{{ route('article.update',$article->id) }}">
                        @csrf
                        @method('PUT')
                        <!-- Title -->
                        <div>
                            <x-label for="title" :value="__('Title')" />
            
                            <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus />
                        </div>
            
                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-label for="text" :value="__('Text')" />
            
                            <x-input id="text" class="block mt-1 w-full" type="text" name="text" :value="old('text')" required />
                        </div>
            
                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-4">
                                {{ __('EDIT') }}
                            </x-button>
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
