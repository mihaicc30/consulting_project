<?php

namespace App\Http\Controllers\isAuth;

use App\Http\Controllers\Controller;
use App\Models\Plans;
use App\Models\ezepostUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class isAuthPlansController extends Controller
{

    public function get()
    {
        // Getting the plans
        $plans = Plans::get();
        $yearly = '';
        return view("isauth.plans", ['plans' => $plans, 'yearly' => $yearly]);
    }

    public function update($plan)
    {

        $plans = $plan->name;
        $type = $plan->type;

        // Split the string
        $planData = explode(' ', $plans);

        // Extract the "Plan Name" from the string
        $planName = $planData[1];

        // Get the authenticated user and ezepost_user
        $user = auth()->user();
        $ezepost_user = ezepostUser::where('ezepost_addr', $user->ezepost_addr)->first();

        // Fetch the control string
        $controlString = $user->controlstring;

        // Update the type of the plan
        $controlString[1] = $type === 'Business' ? 1 : 0;

        // Update the necessary values in the control string based on the selected plan
        if ($planName === 'Starter') {
            $controlString[2] = 1;
        } elseif ($planName === 'Basic') {
            $controlString[2] = 2;
        } elseif ($planName === 'Premium') {
            $controlString[2] = 3;
        } else {
            $controlString[2] = 0;
        }
        // Update the user's controlstring with the updated value
        $ezepost_user->controlstring = $controlString;
        $user->controlstring = $controlString;

        $ezepost_user->save();
        $user->save();

        // Refetch the plans
        $plans = Plans::get();

        return view("isauth.plans", ['plans' => $plans]);
    }

    public function show(Plans $plan, Request $request)
    {
        try {
            $intent = auth()->user()->createSetupIntent();
            $price = $request->price;
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return back()->with('error', 'Something went wrong, please try again later.');
        }

        return view('isauth.subscribe', compact('plan', 'intent', 'price',));
    }


    public function subscription(Request $request)
    {


        $plan = Plans::find($request->plan);

        $plan_name = $plan->name;

        $this->update($plan);

        $subscription = $request->user()->newSubscription($request->plan, 'yearly' === '0' ? $plan->stripe_plan : $plan->stripe_yearly_plan)->create($request->token);

        return view('isauth.subscription-success', compact('plan_name'));
    }
}
