<?php

namespace App\Http\Controllers\isAuth;

use App\Http\Controllers\Controller;
use App\Models\Plans;
use App\Models\ezepostUser;

class isAuthPlansController extends Controller
{

    public function get()
    {
        // Getting the plans
        $plans = Plans::get();
        return view("isauth.plans", ['plans' => $plans]);
    }

    public function update()
    {

        $plans = request('plan');
        $type = request('type');

        // Split the string
        $planData = explode(' ', $plans);

        // Extract the "Plan Name" from the string
        $planName = $planData[1];

        // Get the authenticated user and ezepost_user
        $user = auth()->user();
        $ezepost_user = ezepostUser::where('ezepost_addr', $user->email)->first();

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
}
