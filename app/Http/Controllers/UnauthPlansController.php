<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plans;

class UnauthPlansController extends Controller
{
    public function index() {
        $plans = Plans::orderby("created_at")->get();
        return view("unauth.plans.index", ['plans' => $plans]);
    }
}
