<?php

namespace App\Http\Controllers;

use App\Models\EzepostUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\Invoices;
use Laravel\Cashier\Subscription;
use Laravel\Cashier\SubscriptionItem;

class StripeController extends Controller
{
    public function listen(Request $request)
    {
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        $type = $request->type;
        switch ($type) {
            case 'customer.subscription.deleted':
                $this->handleSubscriptionDeleted($request);
                break;
                
            case 'invoice.paid':
                $this->handleInvoiceCreated($request);
                break;
            case 'charge.succeeded':
                $this->handleChargeSucceeded($request);
                break;
        }

    }
    
    public function handleChargeSucceeded(Request $request)
    {
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        try {
            $payload = $request->all();
            $charge = $payload['data']['object'];
        
            $invoiceNo = $charge['payment_intent'];
            $subscriptionId = "one-time charge";
            $paymentStatus = $charge['status'];
            // $subscriptionStatus = $charge['subscription_status'];
            $duration = 0;
            $futureBillingDate = null;
            $customerId = $charge['customer'];
            $planName = $charge['calculated_statement_descriptor'];
        
            $charge = new Invoices;
            $charge->invoice_no = $invoiceNo;
            $charge->subscription_id = $subscriptionId;
            $charge->payment_status = $paymentStatus;
            $charge->subscription_status = "inactive";
            $charge->duration = $duration;
            $charge->future_billing_date = $futureBillingDate;
            $charge->customer_id = $customerId;
            $charge->plan_name = $planName;
            $charge->save();
    
            return response('Webhook event received', 200); // Respond to the webhook
        } catch (\Exception $e) {
            Log::error("Error creating charge entry: " . $e->getMessage());
            return response('Error creating charge entry', 500);
        }
    }

    public function handleInvoiceCreated(Request $request)
    {
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        try {
            $payload = $request->all();
            $invoice = $payload['data']['object'];
        
            $invoiceNo = $invoice['number'];
            $subscriptionId = $invoice['subscription'];
            $paymentStatus = $invoice['status'];
            // $subscriptionStatus = $invoice['subscription_status'];
            $duration = $invoice['lines']['data'][0]['plan']['interval_count'];
            $futureBillingDate = date('Y-m-d', $invoice['lines']['data'][0]['period']['end']);
            $customerId = $invoice['customer'];
            $planName = $invoice['lines']['data'][0]['plan']['nickname'];
        
            $invoice = new Invoices;
            $invoice->invoice_no = $invoiceNo;
            $invoice->subscription_id = $subscriptionId;
            $invoice->payment_status = $paymentStatus;
            $invoice->subscription_status = "active";
            $invoice->duration = $duration;
            $invoice->future_billing_date = $futureBillingDate;
            $invoice->customer_id = $customerId;
            $invoice->plan_name = $planName;
            $invoice->save();
            
            return response('Webhook event received', 200); // Respond to the webhook
        } catch (\Exception $e) {
            Log::error("Error creating invoice entry: " . $e->getMessage());
            return response('Error creating invoice entry', 500);
        }
    }

    public function handleSubscriptionDeleted(Request $request)
    {
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        try {
            $customerStripeID = $request->data['object']['customer'];
            $customer = User::where('stripe_id', $customerStripeID)->first();

            // -------- if customer has subscription, cancel it
            if ($customer->subscriptions) {
                // Cancel the subscription
                foreach ($customer->subscriptions as $subscription) {
                    // Assuming the user can have only 1 subscription at a time
                   if ($subscription->ends_at !== null) {
                    // Proceed
                    Log::info('Proceeding');
                    } else {
                        $subscription->cancel();
                        Log::info('Subscription canceled: ' . $subscription->stripe_id);
                    }
                }
                Log::info('Subscription canceled');
            } else {
                Log::info('User is not subscribed');
            }
            // --------

            // Update user and EzepostUser control strings
            $tempControlString = $customer->controlstring;

            $tempControlString[1] = "0";
            $tempControlString[2] = "0";

            $tempControlString[3] = "0";
            $tempControlString[11] = "0";
            $tempControlString[12] = "0";
            $tempControlString[13] = "0";
            $tempControlString[14] = "0";
            $tempControlString[15] = "0";
            $tempControlString[16] = "0";
            $tempControlString[17] = "0";


            $customer->controlstring = $tempControlString;
            $customer->save();
            $ezeUser = EzepostUser::where('ezepost_addr', $customer->ezepost_addr)->first();
            $ezeUser->controlstring = $tempControlString;
            $ezeUser->save();
            return response('Webhook event received', 200); // Respond to the webhook
        } catch (\Exception $e) {
            Log::error("Error deleting subscription items: " . $e->getMessage());
            return response('Error deleting subscription items', 500);
        }
    }

}
