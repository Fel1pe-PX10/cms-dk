<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('News') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-5">
                                {{ __('Create News') }}
                            </h2>
                        </header>
                        
                        <form method="POST" action="{{ route('news.store') }}">
                            @csrf
                            
                            @if (@session('status')):
                                <p class="mt-2 text-sm text-green-600 dark:text-green-500"><span class="font-medium">{{ session('status') }}</span></p>
                            @endif
                            
                            
                            <!-- Target Id -->
                            <div>
                                <label for="targetId" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('News Name') }}</label>
                                <select id="targetId" name="targetId" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected value="">Choose a Target</option>
                                    <option value="1">Target 1</option>
                                    <option value="2">Target 2</option>
                                    <option value="3">Target 3</option>
                                    
                                </select>
                                
                            </div>
                            <!-- Headline -->
                            <div>
                                <x-label for="headline" :value="__('Headline')" />

                                <x-input id="headline" class="block mt-1 w-full" type="text" name="headline" :value="old('headline')" required autofocus />
                            </div>
                            

                            <!-- Description -->
                            <div>
                                <x-label for="description" :value="__('Description')" />

                                <x-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required autofocus />
                            </div>

                            <!-- Created by -->
                            <div>
                                <x-label for="createdBy" :value="__('created By')" />

                                <x-input id="createdBy" class="block mt-1 w-full" type="text" name="createdBy" :value="old('createdBy')" required autofocus />
                            </div>

                            <!-- Image -->
                            <div>
                                <x-label for="name" :value="__('Image URL')" />

                                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"  />
                            </div>

                            <!-- Video -->
                            <div>
                                <x-label for="name" :value="__('Video URL')" />

                                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" />
                            </div>

                            <!-- Document -->
                            <div>
                                <x-label for="name" :value="__('Document URL')" />

                                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"  />
                            </div>

                            <!-- Button  -->
                            <div class="flex items-center justify-end mt-4">
                                <x-button class="ml-4">
                                    {{ __('Create') }}
                                </x-button>
                            </div>
                            
                        </form>

                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>