<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\isAuth\EzepostUserController;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\EzepostUser;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\EzepostTracking;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        $user = User::where(
            "ezepost_addr",
            $request->user()->ezepost_addr
        )->first();
        $ezeuser = EzepostUser::where(
            "ezepost_addr",
            $request->user()->ezepost_addr
        )->first();
        return view("profile.edit", [
            "user" => $user,
            "userProfile" => $ezeuser,
        ]);
    }

    /**
     * Update the user's profile information.
     */

    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = User::where(
            "ezepost_addr",
            $request->user()->ezepost_addr
        )->first();
        $ezeuser = EzepostUser::where(
            "ezepost_addr",
            $request->user()->ezepost_addr
        )->first();

        $data = $request->validated();

        if ($ezeuser) {
            $ezeuser->update([
                "displayname" => $data["name"],
                "email" => $data["email"],
                "username" => $data["username"],
            ]);

            $user->update([
                "name" => $data["name"],
                "email" => $data["email"],
            ]);

            // updating the tracking too so that the user will still have his history
            $eze_sender = EzepostTracking::where("sender_ezepost_addr",$ezeuser->ezepost_addr)->update([
                "sender_displayname" => $data["name"],
                "sender_username" => $data["username"],
            ]);
            $eze_receiver = EzepostTracking::where("receiver_ezepost_addr",$ezeuser->ezepost_addr)->update([
                "receiver_displayname" => $data["name"],
                "receiver_username" => $data["username"],
            ]);
            
        } else {
            // If the EzepostUser doesn't exist, create a new one
            EzepostUser::create([
                "username" => $data["username"],
                "ezepost_addr" => $user["email"],
                "displayname" => $user["name"],
                "password" => $user["password"],
                "controlstring" => $user["controlstring"],
                "ezepost_counter" => 0,
                "status" => 0,
                "free_send_left" => null,
            ]);
        }

        if ($user->isDirty("email")) {
            $user->email_verified_at = null;
        }

        $user->save();
        $ezeuser->save();
        return redirect()->back();
        // return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag("userDeletion", [
            "password" => ["required", "current_password"],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to("/");
    }
}
