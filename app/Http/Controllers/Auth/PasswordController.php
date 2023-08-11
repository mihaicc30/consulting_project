<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\VepostUser;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class PasswordController extends Controller
{
    /**
     * Update the user's password.
     */
    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validateWithBag('updatePassword', [
            'current_password' => ['required', 'current_password'],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ]);

        $request->user()->update([
            'password' => Hash::make($validated['password']),
        ]);

        $vepost_user = VepostUser::where('vepost_addr', $request->user()->email)->first();

        // Update password for the related VepostUser record
        if ($vepost_user) {
            $vepost_user->update([
                'password' => Hash::make($validated['password']),
            ]);
        }

        return back()->with('status', 'password-updated');
    }
}
