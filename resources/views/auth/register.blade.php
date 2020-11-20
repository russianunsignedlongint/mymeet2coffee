<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <h1>Meet2Coffee</h1>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
               
               <x-jet-label for="intro" value="{{ __('Don’t let the isolation stop us from networking! 😎 ') }}" />
               <x-jet-label for="intro" value="{{ __('After filling out the information below, we will send you an e-mail once a week with the contact information of a person you are matched with based on your interests. Communication between you and your partner takes place in a 20-minute Zoom call.') }}" />
                </br>
            </div>

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" placeholder="Name & Surname" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" placeholder="E-Mail" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" placeholder="Password" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" placeholder="Repeat Password" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="work" value="{{ __('Briefly describe where you work or what you study.') }}" />
                <x-jet-input id="work" class="block mt-1 w-full" placeholder="I study medicine and work at a hospital." type="text" name="work" :value="old('work')" required autofocus autocomplete="work" />
            </div>

            <div class="mt-4">
                <x-jet-label for="hobbies" value="{{ __('What are your interests and passions (4 hobbies)?') }}" />
                <x-jet-input id="hobbies" class="block mt-1 w-full" placeholder="Tennis, Travel, Startups, Chess etc." type="text" name="hobbies" :value="old('hobbies')" required autofocus autocomplete="hobbies" />
            </div>

            <div class="mt-4">
                <x-jet-label for="plans" value="{{ __('Where do you see yourself in 10 years?') }}" />
                <x-jet-input id="plans" class="block mt-1 w-full" placeholder="Describe yourself in 10 years." type="text" name="plans" :value="old('plans')" required autofocus autocomplete="plans" />
            </div>

            <div class="mt-4">
                <x-jet-label for="why" value="{{ __('Why are you interested in using our service?') }}" />
                <x-jet-input id="why" class="block mt-1 w-full" placeholder="......" type="text" name="why" :value="old('why')" required autofocus autocomplete="why" />
            </div>

            <div class="mt-4">
                <x-jet-label for="socialmedia" value="{{ __('Link on social media') }}" />
                <x-jet-input id="socialmedia" class="block mt-1 w-full" placeholder="Facebook, Instagram, LinkedIn, etc." type="text" name="socialmedia" :value="old('socialmedia')" required autofocus autocomplete="socialmedia" />
            </div>

            <div class="mt-4">
                <label class="md:w-2/3 block font-bold">
                    <span class="text-sm">
                        By clicking Register button you confirm that your data can be used for purposes described in
                        <a class="underline" href="{{ route('privacy-policy') }}">
                            {{ __('Privacy Policy.') }}
                        </a>
                    </span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 ml-4" href="{{ route('privacy-policy') }}">
                    {{ __('Privacy Policy & Imprint') }}
                </a>

                <a class="underline text-sm text-gray-600 hover:text-gray-900 ml-4" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
