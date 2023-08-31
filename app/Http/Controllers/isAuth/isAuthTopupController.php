<?php

namespace App\Http\Controllers\isAuth;

use App\Http\Controllers\Controller;
use App\Models\ezepostUser;
use App\Models\Plans;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class isAuthTopupController extends Controller
{
    public function get()
    {
        // In case user refreshes the page after successfull topup
        $balance = session('balance');
        $message = session('message');

        // Retrieve the email of the authenticated user
        $ezepost_addr = Auth::user()->ezepost_addr;
        // Retrieve the user's balance
        $user = ezepostUser::where('ezepost_addr', $ezepost_addr)->first();

        $balance = $user ? $user->balance : null;
        $intent = auth()->user()->createSetupIntent();

        return view('isauth.topup', compact('balance', 'message','intent'));
    }

    public function topup(Request $request)
    {
        $oneTokenPriceID = "price_1Nl5JkKqpzLBt7b1T3GbdRE1";
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        
        $stripe->invoiceItems->create([
            'customer' => auth()->user()->stripe_id,
            "price" => $oneTokenPriceID,
            'currency' => $request->currency,
            'quantity'=> $request->tokenNumber,
            ]);
                
        $paymentMethod = $stripe->paymentMethods->retrieve(
            $request->paymentMethod,
            []
        );
        $paymentMethod->attach([
            'customer' => auth()->user()->stripe_id,
        ]);
        $invoice = $stripe->invoices->create([
            'pending_invoice_items_behavior' => 'include',
            'customer' => auth()->user()->stripe_id,
            'auto_advance' => true,
            'currency' => $request->currency,
        ]);
    
        $invoice->pay([
            'payment_method' => $request->paymentMethod,
        ]);

        $intent = auth()->user()->createSetupIntent();
        $ezepostUser = EzepostUser::where('ezepost_addr', auth()->user()->ezepost_addr)->first();
        $balance = $ezepostUser->balance;
        $tokenNumber = $request->tokenNumber;
        $balance += $tokenNumber;
        $ezepostUser->balance = $balance;
        $ezepostUser->save();
        $message="You topped up successfully your account with " . $tokenNumber . "tokens!";
        return view('isauth.topup', compact('balance', 'message','intent'));
    }

}
