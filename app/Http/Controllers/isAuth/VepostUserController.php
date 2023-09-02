<?php

namespace App\Http\Controllers\isAuth;

use App\Http\Controllers\Controller;
use App\Models\EzepostUser;

class EzepostUserController extends Controller
{

    public function editProfile()
    {
        // Get the currently authenticated user
        $user = auth()->user();

        // Fetch the user profile for the current user
        $userProfile = EzepostUser::where('id', $user->id)->first();

        // Return the user profile data
        return $userProfile;
    }
}
