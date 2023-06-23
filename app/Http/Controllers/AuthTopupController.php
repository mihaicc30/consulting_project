<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthTopupController extends Controller
{
    public function index() {
        $topup = "topup List form in topupController";
        return view("topup.index", ['topup' => $topup]);
    }
}
