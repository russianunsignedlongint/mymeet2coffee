<?php

namespace App\Actions\Fortify;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    public function update($user, array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'photo' => ['nullable', 'image', 'max:1024'],
            'work' => ['required', 'string', 'max:255'],
            'hobbies' => ['required', 'string', 'max:255'],
            'plans' => ['required', 'string', 'max:255'],
            'why' => ['required', 'string', 'max:255'],
            'socialmedia' => ['required', 'string', 'max:255'],
            'active' => ['required', 'boolean', 'max:1'],
            'threethingsaboutme' => ['required', 'string', 'max:255'],
            // 'Partner_NoResponce' => ['required', 'boolean', 'max:1'],
        ])->validateWithBag('updateProfileInformation');

        if (isset($input['photo'])) {
            $user->updateProfilePhoto($input['photo']);
        }

        if ($input['email'] !== $user->email &&
            $user instanceof MustVerifyEmail) {
            $this->updateVerifiedUser($user, $input);
        } else {
            $user->forceFill([
                'name' => $input['name'],
                'email' => $input['email'],
                'work' => $input['work'],
                'hobbies' => $input['hobbies'],
                'plans' => $input['plans'],
                'why' => $input['why'],
                'socialmedia' => $input['socialmedia'],
                'active' => $input['active'],
                'threethingsaboutme' => $input['threethingsaboutme'],
                // 'Partner_NoResponce' => $input['Partner_NoResponce'],
            ])->save();
        }
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    protected function updateVerifiedUser($user, array $input)
    {
        $user->forceFill([
            'name' => $input['name'],
            'email' => $input['email'],
            'email_verified_at' => null,
            'work' => $input['work'],
            'hobbies' => $input['hobbies'],
            'plans' => $input['plans'],
            'why' => $input['why'],
            'socialmedia' => $input['socialmedia'],
            'active' => $input['active'],
            'threethingsaboutme' => $input['threethingsaboutme'],
            // 'Partner_NoResponce' => $input['Partner_NoResponce'],
        ])->save();

        $user->sendEmailVerificationNotification();
    }
}
