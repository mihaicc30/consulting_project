<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index() {
        $welcome = "welcome form in welcomeController";
        return view("welcome.index", ['welcome' => $welcome]);
    }
}
