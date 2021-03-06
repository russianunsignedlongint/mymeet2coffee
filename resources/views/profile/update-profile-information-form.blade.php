<x-jet-form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('Profile Information') }}
    </x-slot>

    <x-slot name="description">
        {{ __('You are a verified user. Update your account\'s profile information and email address.') }}
    </x-slot>

    <x-slot name="form">
        <!-- Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                <!-- Profile Photo File Input -->
                <input type="file" class="hidden"
                            wire:model="photo"
                            x-ref="photo"
                            x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

                <x-jet-label for="photo" value="{{ __('Photo') }}" />

                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}" class="rounded-full h-20 w-20 object-cover">
                </div>

                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview">
                    <span class="block rounded-full w-20 h-20"
                          x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'">
                    </span>
                </div>

                <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                    {{ __('Select A New Photo') }}
                </x-jet-secondary-button>

                @if ($this->user->profile_photo_path)
                    <x-jet-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                        {{ __('Remove Photo') }}
                    </x-jet-secondary-button>
                @endif

                <x-jet-input-error for="photo" class="mt-2" />
            </div>
        @endif

        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('Name') }}" />
            <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name" autocomplete="name" />
            <x-jet-input-error for="name" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" />
            <x-jet-input-error for="email" class="mt-2" />
        </div>

        <!-- Work -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="work" value="{{ __('Briefly describe where you work or what you study.') }}" />
            <x-jet-input id="work" type="text" placeholder="I study medicine and work at a hospital." class="mt-1 block w-full" wire:model.defer="state.work" autocomplete="work" />
            <x-jet-input-error for="work" class="mt-2" />
        </div>

        <!-- Hobbies -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="hobbies" value="{{ __('What are your interests and passions (4 hobbies)?') }}" />
            <x-jet-input id="hobbies" type="text" placeholder="Tennis, Travel, Startups, Chess etc." class="mt-1 block w-full" wire:model.defer="state.hobbies" autocomplete="hobbies" />
            <x-jet-input-error for="hobbies" class="mt-2" />
        </div>

        <!-- Plans -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="plans" value="{{ __('How do you see yourself in 10 years?') }}" />
            <x-jet-input id="plans" type="text" placeholder="Describe yourself in 10 years." class="mt-1 block w-full" wire:model.defer="state.plans" autocomplete="plans" />
            <x-jet-input-error for="plans" class="mt-2" />
        </div>

        <!-- Three Things About Me -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="threethingsaboutme" value="{{ __('3 things how you can be useful for other users') }}" />
            <x-jet-input id="threethingsaboutme" type="text" placeholder="I can create websites, I know people in the banking sector" class="mt-1 block w-full" wire:model.defer="state.threethingsaboutme" autocomplete="threethingsaboutme" />
            <x-jet-input-error for="threethingsaboutme" class="mt-2" />
        </div>

        <!-- Why -->
        <!-- <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="why" value="{{ __('Why do you need community and new connections?') }}" />
            <x-jet-input id="why" type="text" placeholder="I want to meet new people." class="mt-1 block w-full" wire:model.defer="state.why" autocomplete="why" />
            <x-jet-input-error for="why" class="mt-2" />
        </div> -->

        <!-- Social Media -->
        <!-- <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="socialmedia" value="{{ __('Link on social media') }}" />
            <x-jet-input id="socialmedia" type="text" placeholder="Facebook, Instagram, LinkedIn, etc." class="mt-1 block w-full" wire:model.defer="state.socialmedia" autocomplete="socialmedia" />
            <x-jet-input-error for="socialmedia" class="mt-2" />
        </div> -->

        <!-- Active -->
        <!-- <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="active" value="{{ __('Active') }}" />
            <x-jet-input id="active" type="text" placeholder="Active" class="mt-1 block w-full" wire:model.defer="state.active" autocomplete="active" />
            <x-jet-input-error for="active" class="mt-2" />
        </div> -->

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="active" value="{{ __('Are you participating in matching this week?') }}" />
            <select id="active" class="mt-1 block w-full" wire:model.defer="state.active">
                <option value="0">No</option>
                <option value="1">Yes</option>
            </select>
            <x-jet-input-error for="active" class="mt-2" />
        </div>

        <!-- <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="Partner_NoResponce" value="{{ __('Did your partner respond this week?') }}" />
            <select id="Partner_NoResponce" class="mt-1 block w-full" wire:model.defer="state.Partner_NoResponce">
                <option value="0">Yes</option>
                <option value="1">No</option>
            </select>
            <x-jet-input-error for="Partner_NoResponce" class="mt-2" />
        </div> -->

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="feedback" value="{{ __('Would you like to give us feedback or do you have some remarks regarding the service?') }}" />
            <a href="mailto:info.meet2coffee@gmail.com">Send us an E-mail</a>
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
