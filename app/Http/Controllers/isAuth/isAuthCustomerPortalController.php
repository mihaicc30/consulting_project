<?php

namespace App\Http\Controllers\isAuth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class isAuthCustomerPortalController extends Controller
{
    // For use in the customer portal so that the user can manage their STRIPE accounts
    public function get()
    {
        $user = auth()->user();

        $email = $user->email;

        $intent = $user->createSetupIntent();

        return view('isauth.customer-portal', ['intent' => $intent, 'email' => $email]);
    }
}
