@extends ('layout')


@section('content')
  <!-- Hero START -->
  <div class="relative flex flex-col h-100 overflow-hidden">
  <video src="../storage/herovideo.mp4" class="video absolute h-100 max-md:h-[100%] w-[100svw] object-cover scale-150 origin-center" loop muted autoplay></video>
  <div class="overlay relative flex flex-col">
      <!-- Heading - START -->
      <div class="my-8 text-center">
        <h1 class="font-bold text-3xl">Register</h1>
      </div>
      <!-- Heading - END -->
    </div>
  </div>
  <!-- Hero END -->

  <!-- Register - START -->
  <div class="flex flex-col py-6">

        <form method="POST" action="{{ route('register') }}" class="flex flex-col sm:w-4/5 max-sm:w-[100%] max-w-[998px] mx-auto p-4">
            @csrf

            <div class="grid grid-cols-2 max-sm:grid-cols-1 gap-[2rem]">
            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name *')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email *')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div>
                <x-input-label for="password" :value="__('Password *')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div>
                <x-input-label for="password_confirmation" :value="__('Confirm Password *')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
            <!-- Phone Number -->
            <div>
                <x-input-label for="username" :value="__('Username *')" />

                <x-text-input id="username" class="block mt-1 w-full"
                                type="text"
                                name="username" required autocomplete="username" />
                <x-input-error :messages="$errors->get('username')" class="mt-2" />
            </div>

            <span></span>

            <div class="flex items-center justify-end mt-4 ">
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
        </div>
  </div>

@endsection