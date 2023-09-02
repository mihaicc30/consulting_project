<?php

namespace App\Http\Controllers\isAdmin;
use App\Http\Controllers\Controller;
use App\Models\Plans;

use Illuminate\Http\Request;

class AdminPlansController extends Controller
{
    public function get() {
        $plans = Plans::get();
        return view("isAdmin.plans", ['plans' => $plans]);
    }

    public function updatePlan(Request $request) {
        $plan = Plans::find($request->planid);
        // dd($request->code, $plan, $plans);
        if ($plan) {
            // Update the plan attributes based on the form inputs
            $plan->code = $request->code;
            $plan->name = $request->name;
            $plan->description = $request->description;
            $plan->price = $request->price;
            $options = [];
            foreach ($request->all() as $key => $value) {
                if (strpos($key, 'option') === 0) {
                    $options[] = $value;
                }
            }
            $jsonOptions = json_encode($options);
            $plan->options = $jsonOptions;
            


            $plan->save();
        }
        return redirect()->back();
    }

}
