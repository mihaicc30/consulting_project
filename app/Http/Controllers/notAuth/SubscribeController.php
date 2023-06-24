<?php

namespace App\Http\Controllers\notAuth;
use App\Http\Controllers\Controller;
use App\Models\Newsletter;

use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public function index() {
        $services = [];
        return view("notauth.home", ['services' => $services]);
    }
}
