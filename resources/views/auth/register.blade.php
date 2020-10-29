<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="work" value="{{ __('Work') }}" />
                <x-jet-input id="work" class="block mt-1 w-full" type="text" name="work" :value="old('work')" required autofocus autocomplete="work" />
            </div>

            <div class="mt-4">
                <x-jet-label for="hobbies" value="{{ __('Hobbies') }}" />
                <x-jet-input id="hobbies" class="block mt-1 w-full" type="text" name="hobbies" :value="old('hobbies')" required autofocus autocomplete="hobbies" />
            </div>

            <div class="mt-4">
                <x-jet-label for="plans" value="{{ __('Plans') }}" />
                <x-jet-input id="plans" class="block mt-1 w-full" type="text" name="plans" :value="old('plans')" required autofocus autocomplete="plans" />
            </div>

            <div class="mt-4">
                <x-jet-label for="why" value="{{ __('Why Us?') }}" />
                <x-jet-input id="why" class="block mt-1 w-full" type="text" name="why" :value="old('why')" required autofocus autocomplete="why" />
            </div>

            <div class="mt-4">
                <x-jet-label for="socialmedia" value="{{ __('Social Media') }}" />
                <x-jet-input id="socialmedia" class="block mt-1 w-full" type="text" name="socialmedia" :value="old('socialmedia')" required autofocus autocomplete="socialmedia" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
