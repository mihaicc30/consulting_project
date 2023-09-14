<?php

namespace App\Http\Controllers\isAuth;

use App\Http\Controllers\Controller;
use App\Models\EzepostUser;
use App\Models\Plans;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class isAuthTopupController extends Controller
{
    public function get()
    {
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        $stripeTopUpPlanId = Plans::where('slug', 'top-up')->first()->stripe_plan;
        $stripeTopUpPlanPrice = $stripe->prices->retrieve(
            $stripeTopUpPlanId,
            ['expand' => ['product', 'currency_options']]
        );
        
        $tokenCurrencyOptions = $stripeTopUpPlanPrice->currency_options;
      
        // In case user refreshes the page after successfull topup
        $balance = session('balance');
        $message = session('message');

        // Retrieve the email of the authenticated user
        $ezepost_addr = Auth::user()->ezepost_addr;
        // Retrieve the user's balance
        $user = EzepostUser::where('ezepost_addr', $ezepost_addr)->first();

        $balance = $user ? $user->balance : null;
        $intent = auth()->user()->createSetupIntent();
        return view('isAuth.topup', compact('balance', 'message','intent', 'tokenCurrencyOptions'));
    }

    public function topup(Request $request)
    {
        try {
            $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
            $stripeTopUpPlanId = Plans::where('slug', 'top-up')->first()->stripe_plan;

            $customerStripeID = auth()->user()->stripe_id;
            $customer = $stripe->customers->retrieve($customerStripeID);

            $stripeTopUpPlanPrice = $stripe->prices->retrieve(
                $stripeTopUpPlanId,
                ['expand' => ['product', 'currency_options']]
            );
            
            $user = Auth::user();
            $paymentMethod = $request->paymentMethod;
            $user->createOrGetStripeCustomer();
            $user->addPaymentMethod($paymentMethod);
            $qu = $user->charge($stripeTopUpPlanPrice->currency_options->{$request->currency}->unit_amount * $request->tokenNumber, $request->paymentMethod);

            
            $tokenCurrencyOptions = $stripeTopUpPlanPrice->currency_options;
            $intent = auth()->user()->createSetupIntent();
            $EzepostUser = EzepostUser::where('ezepost_addr', auth()->user()->ezepost_addr)->first();
            $balance = $EzepostUser->balance;
            $tokenNumber = $request->tokenNumber;
            $balance += $tokenNumber;
            $EzepostUser->balance = $balance;
            $EzepostUser->save();
            $message="You topped up successfully your account with " . $tokenNumber . "tokens!";
            return view('isAuth.topup', compact('balance', 'message','intent', 'tokenCurrencyOptions'));
        } catch (\Exception $e) {
            $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
            $stripeTopUpPlanId = Plans::where('slug', 'top-up')->first()->stripe_plan;

            $customerStripeID = auth()->user()->stripe_id;
            $customer = $stripe->customers->retrieve($customerStripeID);

            $stripeTopUpPlanPrice = $stripe->prices->retrieve(
                $stripeTopUpPlanId,
                ['expand' => ['product', 'currency_options']]
            );
            $tokenCurrencyOptions = $stripeTopUpPlanPrice->currency_options;
            $intent = auth()->user()->createSetupIntent();
            $EzepostUser = EzepostUser::where('ezepost_addr', auth()->user()->ezepost_addr)->first();
            $balance = $EzepostUser->balance;


            $message='';
            $err=$e->getMessage();
            return view('isAuth.topup', compact('balance', 'message','err','intent', 'tokenCurrencyOptions'));
        }
    
    }

}
