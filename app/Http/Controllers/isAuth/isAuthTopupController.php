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

            $stripe->paymentMethods->attach($request->paymentMethod, [
                'customer' => $customerStripeID,
            ]);

            $stripe->customers->update($customerStripeID, [
                'invoice_settings' => [
                    'default_payment_method' => $request->paymentMethod,
                ],
            ]);
            
            $paymentIntent = $stripe->paymentIntents->create([
                'amount' => $stripeTopUpPlanPrice->currency_options->{$request->currency}->unit_amount * $request->tokenNumber,
                'currency' => $request->currency,
                'customer' => $customerStripeID,
                'payment_method_types' => ['card'],
            ]);

            $stripe->invoiceItems->create([
                'customer' =>  $customerStripeID,
                "price" => $stripeTopUpPlanId,
                'currency' => $request->currency,
                'quantity'=> $request->tokenNumber,
                ]);
                    

            $invoice = $stripe->invoices->create([
                'pending_invoice_items_behavior' => 'include',
                'customer' =>  $customerStripeID,
                'auto_advance' => true,
                'collection_method' => 'charge_automatically',
                'currency' => $request->currency,
            ]);
        

            $query = $paymentIntent->confirm([
                'payment_method' => $request->paymentMethod,
            ]);

            
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
