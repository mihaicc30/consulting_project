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
        $type = $request->type;

        switch ($type) {
            case 'customer.subscription.deleted':
                $this->handleSubscriptionDeleted($request);
                break;
            case 'customer.subscription.update':
                $this->handleSubscriptionUpdate($request);
                break;
        }

        $customer = $request->data['object']['customer']; // Find customer in the database for update
        // Log::info($customer);

        $reason = $request->data['object']['cancellation_details']['reason']; // Reason: Update or cancel
        // Log::info($reason);


        $cancelled = $request->data['object']['canceled_at'];
        // Log::info($cancelled);

        // Log::info($request);

        return response('Webhook event received', 200); // Respond to the webhook
    }

    public function handleSubscriptionDeleted(Request $request)
    {
        try {

            $subscription_id = $request->data['object']['id'];
            $subscription_item_ids = $request->data['object']['items']['data'];

            Log::info("Trying to delete subscription item with ID: $subscription_id");
            $deleteSubscription = Subscription::where('stripe_id', $subscription_id)->delete();
            Log::info("Deleted $deleteSubscription rows for subscription item with ID: $subscription_id");

            foreach ($subscription_item_ids as $item) {
                $subscriptionItemId = $item['id'];
                Log::info("Trying to delete subscription item with ID: $subscriptionItemId");
                $deletedItems = SubscriptionItem::where('stripe_id', $subscriptionItemId)->delete();
                Log::info("Deleted $deletedItems rows for subscription item with ID: $subscriptionItemId");
            }

            $customer = $request->data['object']['customer'];

            $user = User::where('stripe_id', $customer)->first();
            $ezepost_user = EzepostUser::where('ezepost_addr', $user->ezepost_addr)->first();

            Log::info("Trying to delete customer item with ID: $customer");
            $updateUser = User::where('stripe_id', $customer)->update(['stripe_id' => null]);
            Log::info("Deleted $updateUser rows for customer item with ID: $customer");

            $ctrlString = $user->controlstring;
            $ctrlString[1] = 0;
            $ctrlString[2] = 0;
            $ctrlString[3] = 0;

            $ezepost_user->controlstring = $ctrlString;
            $user->controlstring = $ctrlString;

            $ezepost_user->save();
            $user->save();

            return response('Subscription items deleted', 200);
        } catch (\Exception $e) {
            Log::error("Error deleting subscription items: " . $e->getMessage());
            return response('Error deleting subscription items', 500);
        }
    }
}
