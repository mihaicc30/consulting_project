<?php

namespace App\Http\Controllers\isAuth;

use App\Http\Controllers\Controller;
// use App\Models\Home;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isAuthDashboardController extends Controller
{
    public function get()
    {
        // need to get multiple data like>
        // - total transfers/ total sent/ total failed/ total received
        // - user account string > vepost_user > controllingstring from where will have user group, account state, plan type, tokens

        $email = Auth::user()->email;

        $home = [];

        return view("isauth.dashboard", ['home' => $home]);
    }
}
