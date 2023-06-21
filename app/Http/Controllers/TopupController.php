<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopupController extends Controller
{
    public function index() {
        $topup = "topup List form in topupController";
        return view("topup.index", ['topup' => $topup]);
    }
}
