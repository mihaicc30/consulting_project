<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plans;

class PlansController extends Controller
{
    public function index() {
        $plans = Plans::orderby("created_at")->get();
        return view("plans.index", ['plans' => $plans]);
    }
}
