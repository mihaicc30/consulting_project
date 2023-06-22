@if (Auth::guest())

@else
<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 dark:bg-gray-800 flex flex-col h-[100vh] fixed">
    <!-- Primary Navigation Menu -->
    <div class="flex flex-col h-[100vh]">
        <div class="flex flex-col h-[100vh] gap-4">

            <!-- Logo -->
            <div class="shrink-0 flex flex-col items-center">
                <a href="{{ route('dashboard') }}">
                        <svg class="block logo w-auto grow mt-2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 131.4 80" style="enable-background:new 0 0 131.4 80;" xml:space="preserve">
                            <style type="text/css">
                                .st0{fill:#E53323;}
                                .st1{fill:url(#SVGID_1_);}
                                .st2{fill:url(#SVGID_00000056394859992788285620000016356982458054443397_);}
                                .st3{fill:#FFCB00;}
                                .st4{fill:url(#SVGID_00000129194780860868990140000007357946114950875017_);}
                                .st5{fill:#F29100;}
                            </style>
                            <path class="st0" d="M38.5,44.3v6.1c0,0.5-0.4,1-1,1H1c-0.5,0-1-0.4-1-1V1c0-0.5,0.4-1,1-1h35.5c0.5,0,1,0.4,1,1V7c0,0.5-0.4,1-1,1  h-27v13.3h23.8c0.5,0,1,0.4,1,1v5.9c0,0.5-0.4,1-1,1H9.5v14.1h28C38,43.3,38.5,43.7,38.5,44.3z"/>
                            <path class="st0" d="M131.4,44.3v6.1c0,0.5-0.4,1-1,1H93.9c-0.5,0-1-0.4-1-1V1c0-0.5,0.4-1,1-1h35.5c0.5,0,1,0.4,1,1V7  c0,0.5-0.4,1-1,1h-27v13.3h23.8c0.5,0,1,0.4,1,1v5.9c0,0.5-0.4,1-1,1h-23.8v14.1h28C131,43.3,131.4,43.7,131.4,44.3z"/>
                            <path class="st0" d="M81.5,37.9c3.7,0,6.7,3,6.7,6.7c0,3.7-3,6.7-6.7,6.7c-3.7,0-6.7-3-6.7-6.7C74.8,40.9,77.8,37.9,81.5,37.9"/>
                            <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="51.016" y1="44.5926" x2="75.541" y2="44.5926">
                                <stop offset="0" style="stop-color:#BF0D0D"/>
                                <stop offset="9.322089e-02" style="stop-color:#C71512"/>
                                <stop offset="0.3551" style="stop-color:#D8261B"/>
                                <stop offset="0.6423" style="stop-color:#E23021"/>
                                <stop offset="1" style="stop-color:#E53323"/>
                            </linearGradient>
                            <path class="st1" d="M72.5,44.6c0-2.7,1.2-5.1,3-6.7H57.7c-3.7,0-6.7,3-6.7,6.7c0,3.7,3,6.7,6.7,6.7h17.8  C73.7,49.7,72.5,47.3,72.5,44.6z"/>
                            <linearGradient id="SVGID_00000132772404809936920710000015471056043988234416_" gradientUnits="userSpaceOnUse" x1="45.9171" y1="49.0714" x2="79.4457" y2="10.1596">
                                <stop offset="0" style="stop-color:#E95A0C"/>
                                <stop offset="0.25" style="stop-color:#F29100"/>
                                <stop offset="0.7505" style="stop-color:#F29100"/>
                                <stop offset="1" style="stop-color:#E95A0C"/>
                            </linearGradient>
                            <path style="fill:url(#SVGID_00000132772404809936920710000015471056043988234416_);" d="M57.7,51.3c-1.3,0-2.5-0.5-3.4-1.5  c-1.6-1.9-1.4-4.7,0.5-6.3l25.7-22.2c2.8-2.4,3.1-6.6,0.7-9.5c-2.4-2.8-6.6-3.1-9.5-0.7L45.7,33.6c-4.2,3.6-4.7,10-1.1,14.2  c2,2.3,4.8,3.5,7.6,3.5L57.7,51.3z"/>
                            <path class="st3" d="M48.9,0c3.7,0,6.7,3,6.7,6.7c0,3.7-3,6.7-6.7,6.7c-3.7,0-6.7-3-6.7-6.7C42.2,3,45.2,0,48.9,0"/>
                            <linearGradient id="SVGID_00000074440112933318192930000005754585911127858072_" gradientUnits="userSpaceOnUse" x1="54.8232" y1="10.6357" x2="88.1831" y2="10.6357">
                                <stop offset="0" style="stop-color:#FFCB00"/>
                                <stop offset="0.3577" style="stop-color:#FEC800"/>
                                <stop offset="0.6449" style="stop-color:#FCBE00"/>
                                <stop offset="0.9068" style="stop-color:#F8AD00"/>
                                <stop offset="1" style="stop-color:#F6A500"/>
                            </linearGradient>
                            <path style="fill:url(#SVGID_00000074440112933318192930000005754585911127858072_);" d="M85.7,3.5c-2-2.3-4.8-3.5-7.6-3.5H54.8  c1.9,1.6,3,4,3,6.7c0,2.7-1.2,5.1-3,6.7l22.8,0c1.3,0,2.5,0.5,3.4,1.6c1.6,1.9,1.4,4.7-0.5,6.3l4.1-3.6C88.9,14.1,89.4,7.7,85.7,3.5  z"/>
                            <g>
                                <path class="st5" d="M12.8,61.1c1.2,0.6,2.2,1.3,2.9,2.4c0.7,1,1,2.3,1,3.7c0,1.4-0.3,2.6-1,3.7c-0.7,1-1.6,1.8-2.9,2.4   c-1.2,0.6-2.7,0.8-4.4,0.8H4v5.6H0.4V60.3h8C10.1,60.3,11.5,60.6,12.8,61.1z M11.8,70.1c0.8-0.7,1.2-1.6,1.2-2.9   c0-1.2-0.4-2.2-1.2-2.9c-0.8-0.7-2-1-3.6-1H4v7.7h4.2C9.8,71.1,11,70.7,11.8,70.1z"/>
                                <path class="st5" d="M42.7,78.7c-1.6-0.9-2.8-2.1-3.7-3.6c-0.9-1.5-1.4-3.2-1.4-5.1s0.5-3.6,1.4-5.1c0.9-1.5,2.2-2.7,3.7-3.6   s3.4-1.3,5.4-1.3c2,0,3.8,0.4,5.4,1.3c1.6,0.9,2.8,2,3.7,3.6c0.9,1.5,1.4,3.2,1.4,5.1c0,1.9-0.5,3.6-1.4,5.1   c-0.9,1.5-2.2,2.7-3.7,3.6c-1.6,0.9-3.4,1.3-5.4,1.3C46.1,80,44.3,79.6,42.7,78.7z M51.6,76c1-0.6,1.8-1.4,2.4-2.4   c0.6-1,0.9-2.2,0.9-3.5s-0.3-2.5-0.9-3.5c-0.6-1-1.4-1.9-2.4-2.4c-1-0.6-2.2-0.9-3.5-0.9c-1.3,0-2.5,0.3-3.5,0.9   c-1,0.6-1.8,1.4-2.4,2.4c-0.6,1-0.9,2.2-0.9,3.5s0.3,2.5,0.9,3.5c0.6,1,1.4,1.9,2.4,2.4c1,0.6,2.2,0.9,3.5,0.9   C49.4,76.8,50.6,76.5,51.6,76z"/>
                                <path class="st5" d="M82.5,79.4c-1.4-0.4-2.5-1-3.3-1.7l1.2-2.8c0.8,0.6,1.8,1.1,2.9,1.5c1.2,0.4,2.3,0.6,3.5,0.6   c1.4,0,2.5-0.2,3.2-0.7c0.7-0.5,1.1-1.1,1.1-1.8c0-0.6-0.2-1-0.6-1.4c-0.4-0.4-0.9-0.6-1.5-0.8c-0.6-0.2-1.4-0.4-2.5-0.7   c-1.5-0.4-2.7-0.7-3.6-1.1c-0.9-0.4-1.7-0.9-2.4-1.7c-0.7-0.7-1-1.8-1-3c0-1.1,0.3-2,0.9-2.9c0.6-0.9,1.5-1.6,2.6-2.1   c1.2-0.5,2.6-0.8,4.3-0.8c1.2,0,2.3,0.1,3.5,0.4c1.1,0.3,2.1,0.7,3,1.3l-1.1,2.8c-0.9-0.5-1.7-0.9-2.7-1.1   c-0.9-0.3-1.8-0.4-2.7-0.4c-1.4,0-2.5,0.2-3.2,0.7c-0.7,0.5-1,1.1-1,1.9c0,0.6,0.2,1,0.6,1.4c0.4,0.4,0.9,0.6,1.5,0.8   s1.4,0.4,2.5,0.7c1.4,0.3,2.6,0.7,3.5,1c0.9,0.4,1.7,0.9,2.4,1.7c0.7,0.7,1,1.7,1,3c0,1.1-0.3,2-0.9,2.9c-0.6,0.9-1.5,1.6-2.6,2.1   C90,79.7,88.5,80,86.8,80C85.3,80,83.9,79.8,82.5,79.4z"/>
                                <path class="st5" d="M121.1,63.4h-6.4v-3.1h16.5v3.1h-6.4v16.4h-3.6V63.4z"/>
                            </g>
                            </svg>
                </a>
            </div>

            <!-- Navigation Links -->
            <div class="hidden shrink-0 sm:-my-px sm:flex flex-col gap-4 NL">
                <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    {{ __('Dashboard') }}
                </x-jet-nav-link>
                <x-jet-nav-link href="{{ route('files') }}" :active="request()->routeIs('files')">
                    {{ __('Files') }}
                </x-jet-nav-link>
                <x-jet-nav-link href="{{ route('contacts') }}" :active="request()->routeIs('contacts')">
                    {{ __('Contacts') }}
                </x-jet-nav-link>
                <x-jet-nav-link href="{{ route('plans') }}" :active="request()->routeIs('plans')">
                    {{ __('Plans') }}
                </x-jet-nav-link>
                <x-jet-nav-link href="{{ route('subscribe') }}" :active="request()->routeIs('subscribe')">
                    {{ __('Subscribe') }}
                </x-jet-nav-link>
                <x-jet-nav-link href="{{ route('topup') }}" :active="request()->routeIs('topup')">
                    {{ __('Topup') }}
                </x-jet-nav-link>
            </div>

            <div class="hidden sm:flex sm:items-center mt-auto">
                <!-- Settings Dropdown -->
                <div class="zzz relative flex flex-col gap-4">
                    <x-jet-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <button
                                class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                <img class="h-8 w-8 rounded-full object-cover"
                                    src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                            </button>
                            @else
                            <span class="inline-flex rounded-md">
                                <button type="button"
                                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                    {{ Auth::user()->name }}

                                    <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-500">
                                {{ __('Manage Account') }}
                            </div>

                            <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-jet-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                            <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                {{ __('API Tokens') }}
                            </x-jet-dropdown-link>
                            @endif

                            <div class="border-t border-gray-100"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-jet-dropdown-link>
                            </form>
                        </x-slot>
                    </x-jet-dropdown>
                    
                    <div class="shrink-0 flex items-center px-4 mb-4">

                        <button type="button" x-bind:class="darkMode ? 'bg-indigo-500' : 'bg-gray-200'"
                            x-on:click="darkMode = !darkMode"
                            class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                            role="switch" aria-checked="false">
                            <span x-bind:class="darkMode ? 'translate-x-5 bg-gray-700' : 'translate-x-0 bg-white'"
                                class="pointer-events-none relative inline-block h-5 w-5 transform rounded-full shadow ring-0 transition duration-200 ease-in-out">
                                <span
                                    x-bind:class="darkMode ? 'opacity-0 ease-out duration-100' : 'opacity-100 ease-in duration-200'"
                                    class="absolute inset-0 flex h-full w-full items-center justify-center transition-opacity"
                                    aria-hidden="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-gray-400"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />
                                    </svg>
                                </span>
                                <span
                                    x-bind:class="darkMode ?  'opacity-100 ease-in duration-200' : 'opacity-0 ease-out duration-100'"
                                    class="absolute inset-0 flex h-full w-full items-center justify-center transition-opacity"
                                    aria-hidden="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </span>
                        </button>

                    </div>

                </div>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'absolute': open, 'hidden': ! open}" class="hidden sm:hidden RNM bg-gray-100 dark:bg-gray-800">
        <div class="pt-2 pb-3">
            <x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-jet-responsive-nav-link>

            <x-jet-responsive-nav-link href="{{ route('files') }}" :active="request()->routeIs('files')">
                {{ __('Files') }}
            </x-jet-responsive-nav-link>
            <x-jet-responsive-nav-link href="{{ route('contacts') }}" :active="request()->routeIs('contacts')">
                {{ __('Contacts') }}
            </x-jet-responsive-nav-link>
            
            <x-jet-responsive-nav-link href="{{ route('plans') }}" :active="request()->routeIs('plans')">
                {{ __('Plans') }}
            </x-jet-responsive-nav-link>
                <x-jet-responsive-nav-link href="{{ route('subscribe') }}" :active="request()->routeIs('subscribe')">
                    {{ __('Subscribe') }}
                </x-jet-responsive-nav-link>
                <x-jet-responsive-nav-link href="{{ route('topup') }}" :active="request()->routeIs('topup')">
                    {{ __('Topup') }}
                </x-jet-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-4 border-t border-gray-200">
            <div class="flex items-center px-4">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                <div class="shrink-0 mr-3">
                    <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                        alt="{{ Auth::user()->name }}" />
                </div>
                @endif

                <div>
                    <div class="font-medium text-base text-gray-400">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                <x-jet-responsive-nav-link href="{{ route('profile.show') }}"
                    :active="request()->routeIs('profile.show')">
                    {{ __('Profile') }}
                </x-jet-responsive-nav-link>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                <x-jet-responsive-nav-link href="{{ route('api-tokens.index') }}"
                    :active="request()->routeIs('api-tokens.index')">
                    {{ __('API Tokens') }}
                </x-jet-responsive-nav-link>
                @endif

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <x-jet-responsive-nav-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                        {{ __('Log Out') }}
                    </x-jet-responsive-nav-link>
                </form>
                <div class="flex pl-3 ">
                    <button type="button" x-bind:class="darkMode ? 'bg-indigo-500' : 'bg-gray-200'"
                        x-on:click="darkMode = !darkMode"
                        class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                        role="switch" aria-checked="false">
                        <span x-bind:class="darkMode ? 'translate-x-5 bg-gray-700' : 'translate-x-0 bg-white'"
                            class="pointer-events-none relative inline-block h-5 w-5 transform rounded-full shadow ring-0 transition duration-200 ease-in-out">
                            <span
                                x-bind:class="darkMode ? 'opacity-0 ease-out duration-100' : 'opacity-100 ease-in duration-200'"
                                class="absolute inset-0 flex h-full w-full items-center justify-center transition-opacity"
                                aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-gray-400"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />
                                </svg>
                            </span>
                            <span
                                x-bind:class="darkMode ?  'opacity-100 ease-in duration-200' : 'opacity-0 ease-out duration-100'"
                                class="absolute inset-0 flex h-full w-full items-center justify-center transition-opacity"
                                aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                        </span>
                    </button>
                        </div>
               
            </div>
        </div>
    </div>
</nav>
@endif