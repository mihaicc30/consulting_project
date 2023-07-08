<?php

namespace App\Http\Controllers\isAuth;

use App\Http\Controllers\Controller;
use App\Models\Topup;
use App\Models\EzepostUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class isAuthDashboardController extends Controller
{
        public function get()
        {
                // need to get multiple data like>
                // - total transfers/ total sent/ total failed/ total received
                // - user account string > vepost_user > controllingstring from where will have user group, account state, plan type, tokens
                // Retrieve the email of the authenticated user
                $email = Auth::user()->email;
                // Retrieve the user's balance
                $user = EzepostUser::where('username', $email)->first();

                $balance = $user ? $user->balance : null;
                return view("isauth.dashboard", ['balance' => $balance]);
        }
}
