<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthSubscribeController extends Controller
{
    public function index() {
        $subscribe = "subscribe List form in subscribeController";
        return view("subscribe.index", ['subscribe' => $subscribe]);
    }
}
