<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Feedback') }}
        </h2>
    </x-slot>

    <div>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
    <x-jet-action-section>
    <x-slot name="title">
        {{ __('Do you have any message for us?') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Contact Us') }}
    </x-slot>

    <x-slot name="content">
    <h3 class="text-lg font-medium text-gray-900">
                {{ __("Feedback") }}
    </h3>

    <div class="mt-3 max-w-xl text-sm text-gray-600">
        <p>
              <form method="post" action="{{ route('feedback_post') }}">
                @csrf
                    <textarea id="message" name="message" placeholder="Write something.." class="w-full mt-2 mb-6 px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-green-500" style="height:400px"></textarea>
                    <input type="submit" value="Submit" class="btn-primary transition duration-300 ease-in-out focus:outline-none focus:shadow-outline bg-purple-700 hover:bg-purple-900 text-white font-normal py-2 px-4 mr-1 rounded">
                </form>
        </p>
    </div>

    <div class="mt-5">
    </div>
    </x-slot>

</x-jet-action-section>
</div>
</div>
</x-app-layout>
