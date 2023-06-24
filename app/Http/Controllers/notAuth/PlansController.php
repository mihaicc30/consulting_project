<?php

namespace App\Http\Controllers\notAuth;
use App\Http\Controllers\Controller;
use App\Models\Plans;
use Illuminate\Http\Request;

class PlansController extends Controller
{
    public function index() {
        $plans = Plans::get();
        return view("notauth.plans", ['plans' => $plans]);
    }
}
