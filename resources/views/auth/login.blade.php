<x-guest-layout>
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <!-- <a href="{{ route('faq') }}" class="text-sm text-gray-700 underline ml-4">FAQ</a> -->

                        <a href="{{ route('about') }}" class="text-sm text-gray-700 underline ml-4">About Us</a>

                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline ml-4">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endif
                </div>
            @endif
    <x-jet-authentication-card>
        <x-slot name="logo">
            <!-- <x-jet-authentication-card-logo /> -->
            <img src="{{asset('/img/logo.png')}}" height="200" width="200" style="float: center">
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
                <p>&nbsp;</p>
                <h1>
                    Don’t let the isolation stop us from networking! 😎
                    <p>&nbsp;</p>
                    <x-jet-label for="intro" value="{{ __('Fill out the information about yourself, and we will send you an e-mail once a week with the contact information of a person you are matched with based on your interests. Communication between you and your partner takes place in a 15-minute Zoom call.') }}" />
                </h1>
                <p>&nbsp;</p>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">

                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 ml-4" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                
                <x-jet-button class="ml-4">
                    {{ __('Login') }}
                </x-jet-button>
            </div>
        </form>

        

        <div class="flex items-center justify-center mt-4">
            </br></br></br>
            <x-jet-button>
                <a href="{{ route('register') }}">
                    {{ __('Create New Account') }}
                </a>
            </x-jet-button>
        </div>

        <div class="flex items-center justify-center mt-4">

                <a class="underline text-sm text-gray-600 hover:text-gray-900 ml-4" href="{{ route('about') }}">
                    {{ __('About Us') }}
                </a>

                <a class="underline text-sm text-gray-600 hover:text-gray-900 ml-4" href="{{ route('privacy-policy') }}">
                    {{ __('Privacy Policy & Imprint') }}
                </a>
        </div>


    </x-jet-authentication-card>
</x-guest-layout>
