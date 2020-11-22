<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Partners') }}
        </h2>
    </x-slot>

    <div>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
    <x-jet-action-section>
    <x-slot name="title">
        {{ __('Profile of your partner') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Contact him.') }}
    </x-slot>

    @if($error == false)
    <x-slot name="content">
        <h3 class="text-lg font-medium text-gray-900">
                {{ __($data->name) }}
        </h3>

        <!-- E-Mail -->
        <div class=mt-5>
            {{ __('E-Mail') }}
        </div>

        <div class="mt-3 max-w-xl text-sm text-gray-600">
                <p>{{ $data->email }}</p>
        </div>


        <div class=mt-5>
            {{ __('E-Mail') }}
        </div>

        <div class="mt-3 max-w-xl text-sm text-gray-600">
                <p>{{ __($data->name) }}</p>
        </div>

        <!-- Work 
        <div class=mt-5>
            {{ __('Work') }}
        </div>

        <div class="mt-3 max-w-xl text-sm text-gray-600">
                <p>{{ $data->work }}</p>
        </div>

        <!-- Hobbies 
        <div class=mt-5>
            {{ __('Hobbies') }}
        </div>

        <div class="mt-3 max-w-xl text-sm text-gray-600">
                <p>{{ $data->hobbies }}</p>
        </div>

        <!-- Plans 
        <div class=mt-5>
            {{ __('Plans') }}
        </div>

        <div class="mt-3 max-w-xl text-sm text-gray-600">
                <p>{{ $data->plans }}</p>
        </div>

        <!-- Plans 
        <div class=mt-5>
            {{ __('Plans') }}
        </div>

        <div class="mt-3 max-w-xl text-sm text-gray-600">
                <p>{{ $data->plans }}</p>
        </div>

        <!-- Social Media
        <div class=mt-5>
            {{ __('Social Media') }}
        </div>

        <div class="mt-3 max-w-xl text-sm text-gray-600">
                <p>{{ $data->socialmedia }}</p>
        </div>
-->

    </x-slot>
    @else
        <x-slot name="content">
        <h3 class="text-lg font-medium text-gray-900">
                {{ __("Not found") }}
        </h3>

        <div class="mt-3 max-w-xl text-sm text-gray-600">
            <p>
                Contact data to your partner should appear here by Sunday. If they won't, contact us!
            </p>
        </div>

        <div class="mt-5">
        </div>
        </x-slot>
    @endif
</x-jet-action-section>
</div>
</div>
</x-app-layout>
