<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\EzepostUser;
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

        $passwordHash = Hash::make($request->password);

        $request->user()->update([
            'password' => $passwordHash,
        ]);

        $ezepost_user = EzepostUser::where('ezepost_addr', $request->user()->email)->first();

        // Update password for the related EzepostUser record
        if ($ezepost_user) {
            $ezepost_user->update([
                'password' => $passwordHash,
            ]);
        }

        return back()->with('status', 'password-updated');
    }
}
