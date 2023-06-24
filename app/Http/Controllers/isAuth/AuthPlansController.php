<?php

namespace App\Http\Controllers\notAuth;
use App\Http\Controllers\Controller;
use App\Models\Plans;

use Illuminate\Http\Request;

class AuthPlansController extends Controller
{
    public function index() {
        $plans = [];
        return view("notauth.plans", ['plans' => $plans]);
    }
}
