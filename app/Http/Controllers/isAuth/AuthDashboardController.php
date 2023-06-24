<?php

namespace App\Http\Controllers\notAuth;
use App\Http\Controllers\Controller;
// use App\Models\Home;

use Illuminate\Http\Request;

class AuthDashboardController extends Controller
{
    public function index() {
        $home = [];
        return view("notauth.home", ['home' => $home]);
    }
}
