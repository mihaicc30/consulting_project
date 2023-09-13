<?php

namespace App\Http\Controllers;

use App\Models\EzepostUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
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
        }

    }

    public function handleSubscriptionDeleted(Request $request)
    {
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        try {
            $customerStripeID = $request->data['object']['customer'];
            echo 'looking for : ' . $customerStripeID;

            $customer = User::where('stripe_id', $request->data['object']['customer'])->first();

            echo $customer->controlstring;


            // -------- if customer has subscription, cancel it
            $isExistingSub = $stripe->subscriptions->all(['customer' => $customerStripeID]);
            if (empty($isExistingSub->data)) {
                // User is not already subscribed, continue with the rest of the code
            } else {
                // User is already subscribed, cancel the subscription and continue with the rest of the code
                $subscriptionId = $isExistingSub->data[0]->id;
                $stripe->subscriptions->cancel($subscriptionId);
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
