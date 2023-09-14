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
            $subscription_id = $request->data['object']['id'];
            $subscription_item_ids = $request->data['object']['items']['data'];

            echo "Trying to delete subscription item with ID: $subscription_id";
            $deleteSubscription = Subscription::where('stripe_id', $subscription_id)->delete();
            echo "Deleted " . $deleteSubscription . " rows for subscription item with ID: " . $subscription_id;

            foreach ($subscription_item_ids as $item) {
                $subscriptionItemId = $item['id'];
                echo "Trying to delete subscription item with ID:" . $subscriptionItemId;
                $deletedItems = SubscriptionItem::where('stripe_id', $subscriptionItemId)->delete();
                echo "Deleted $deletedItems rows for subscription item with ID: " . $subscriptionItemId;
            }

            $customer = $request->data['object']['customer'];

            $user = User::where('stripe_id', $customer)->first();
            $ezepost_user = EzepostUser::where('ezepost_addr', $user->ezepost_addr)->first();

            echo "Trying to delete customer item with ID: " . $customer;
            $updateUser = User::where('stripe_id', $customer)->update(['stripe_id' => null]);
            echo "Deleted $updateUser rows for customer item with ID: " . $customer;


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
