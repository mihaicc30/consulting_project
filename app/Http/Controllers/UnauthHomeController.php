<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class UnauthHomeController extends Controller
{
    public function index() {
        $home = ["home"];
        return view("unauth.home.index", ['home' => $home]);
    }
}
