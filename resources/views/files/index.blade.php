<x-app-layout x-data="{ darkMode: false }" x-init="
    if (!('darkMode' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches) {
      localStorage.setItem('darkMode', JSON.stringify(true));
    }
    darkMode = JSON.parse(localStorage.getItem('darkMode'));
    $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))">
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight dark:text-gray-100 text-gray-800 ">
            {{ __('Files') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-2">
                <p>Files page</p>
                @if (count($files) > 0)
                    @foreach ($files as $file)
                        <p>{{$file->name}}</p>
                    @endforeach
                @else
                    <p>No files available.</p>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>