<x-app-layout x-data="{ darkMode: false }" x-init="
    if (!('darkMode' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches) {
      localStorage.setItem('darkMode', JSON.stringify(true));
    }
    darkMode = JSON.parse(localStorage.getItem('darkMode'));
    $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))">
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight dark:text-gray-100 text-gray-800 ">
            {{ __('Plans') }}
        </h2>
    </x-slot>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-2">
            <p>Plans page</p>
            @if (count($plans) > 0)
                @foreach ($plans as $plan)
                    <p>{{$plan->name}} <span class="plan-price">{{$plan->price}}</span></p>
                @endforeach
            @else
                <p>No plans available.</p>
            @endif
        </div>
    </div>
</x-app-layout>
