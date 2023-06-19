<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    @livewireStyles

    <!-- Scripts -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script defer src="{{asset('js/app.js')}}"></script>
</head>

<body class="font-sans antialiased" x-data="{ darkMode: false }" x-init="
    if (!('darkMode' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches) {
      localStorage.setItem('darkMode', JSON.stringify(true));
    }
    darkMode = JSON.parse(localStorage.getItem('darkMode'));
    $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))" x-cloak>
    <div x-bind:class="{'dark' : darkMode === true}" class="min-h-screen bg-gray-100 ">
        <x-jet-banner />
        <div class="min-h-screen bg-gray-100 grid overflow-hidden gridLayout">
            <div>
                @livewire('navigation-menu')

            </div>
            <div class="flex flex-col overflow-y-auto">
                <!-- Page Heading -->
                @if (isset($header))
                <header class="bg-white shadow dark:bg-gray-800">
                    <div class="">
                        {{ $header }}
                    </div>
                </header>
                @endif

                <!-- Page Content -->
                <main class="bg-gray-100 dark:bg-gray-800">
                    {{ $slot }}
                </main>
            </div>

        </div>
    </div>

    @stack('modals')

    @livewireScripts
</body>

</html>