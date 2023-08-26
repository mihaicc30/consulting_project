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
        $status = session('status');
        $message = session('message');

        // Retrieve the email of the authenticated user
        $ezepost_addr = Auth::user()->ezepost_addr;
        // Retrieve the user's balance
        $user = ezepostUser::where('ezepost_addr', $ezepost_addr)->first();

        $balance = $user ? $user->balance : null;


        return view('isauth.topup', compact('balance', 'status', 'message'));
    }

    public function topup(Request $request)
    {

        $intent = auth()->user()->createSetupIntent();

        // Retrieve the email of the authenticated user
        $ezepost_addr = Auth::user()->ezepost_addr;

        // Retrieve the user's record
        $user = ezepostUser::where('ezepost_addr', $ezepost_addr)->first();

        // Check if the user exists
        if ($user) {

            // Get user topup details
            $currency = $request->currency;
            $price = $request->amount;

            // Get Top-up plan
            $plan = Plans::where('type', 'Top-up')->first();

            // Get plan name
            $plan_name = $plan->name;

            // Get stripe id
            $stripe_id = '';

            foreach ($plan->currency as $currencyArray) {
                [$currencyTag, $link] = $currencyArray;
                if (strtolower($currencyTag) === $currency) {
                    $stripe_id = $link;
                    break;
                }
            }

            $yearly = '';

            return view('isauth.subscribe', compact('plan', 'price', 'yearly', 'intent', 'currency'));
        } else {
            // User not found, handle the error appropriately
            return view('isauth.topup', ['balance' => $user->balance, 'status' => 'fail', 'message' => '❌ User not found. !?']);
        }
    }

    public function pay(Request $request)

    {
        $stripeIntent = json_decode($request->stripeIntent, true);

        if ($stripeIntent['status'] === 'succeeded') {

            $user = auth()->user();
            $customer = $user->stripe_id;

            $stripe = new \Stripe\StripeClient('sk_test_51NghmRKqpzLBt7b1JdShollPt7F590ObQ3zNARS1f190zniQ4dtkxQneRsaKTHXky0FVWLHKlylBv1MaE0CssLIG00PPSPPobd');

            $paymentIntent = $stripe->paymentIntents->create([
                'amount' => $request->price * 100,
                'currency' => $request->currency,
                'customer' => $customer,
                'setup_future_usage' => 'off_session',
                'automatic_payment_methods[enabled]' => 'true',
                'automatic_payment_methods[allow_redirects]' => 'never',
            ]);

            $paymentConfirm = $stripe->paymentIntents->confirm(
                $paymentIntent->id,
                ['payment_method' => $stripeIntent['payment_method']]
            );

            if ($paymentConfirm->status) {

                $ezepost_addr = $user->ezepost_addr;
                $user = ezepostUser::where('ezepost_addr', $ezepost_addr)->first();
                $user->balance += $request->price;
                $user->save();
                session(['balance' => $user->balance, 'status' => 'success', 'message' => '💰 Top-up successful.']);
                return view('isauth.subscription-success', ['plan_name' => 'Top-up']);
            } else {
                session(['balance' => $user->balance, 'status' => 'fail', 'message' => '❌ Top-up failed.']);
                return view('isauth.subscription-failed', ['plan_name' => 'Top-up']);
            }
        } else {
            return view('isauth.subscription-failed', ['plan_name' => 'Top-up']);
        }

        return view('isauth.subscription-success', ['plan_name' => 'Top-up']);
    }
}
