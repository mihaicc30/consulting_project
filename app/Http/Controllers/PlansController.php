<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlansController extends Controller
{
    public function index() {
        $plans = "Plan List form in PlansController";
        return view("plans.index", ['plans' => $plans]);
    }
}
