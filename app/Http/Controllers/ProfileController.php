<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\isAuth\VepostUserController;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\VepostUser;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{

    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        $vepostUserController = new VepostUserController();
        $userProfile = $vepostUserController->editProfile();

        return view('profile.edit', [
            'user' => $request->user(),
            'userProfile' => $userProfile
        ]);
    }

    /**
     * Update the user's profile information.
     */

    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = $request->user();
        $userProfile = VepostUser::where('id', $user->id)->first();

        $data = $request->validated();

        if ($userProfile) {

            $userProfile->update([
                'displayname' => $data['name'],
                'email' => $data['email'],
                'username' => $data['username'],
            ]);

            $user->update([
                'name' => $data['name'],
                'email' => $data['email'],
            ]);
        } else {
            // If the VepostUser doesn't exist, create a new one
            VepostUser::create([
                'username' => $data['username'],
                'vepost_addr' => $user['email'],
                'displayname' => $user['name'],
                'password' => $user['password'],
                'controlstring' => $user['controlstring'],
                'vepost_counter' => 0,
                'status' => 0,
                'free_send_left' => null
            ]);
        }

        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        $user->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
