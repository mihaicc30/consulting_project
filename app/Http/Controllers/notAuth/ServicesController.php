<?php

namespace App\Http\Controllers\notAuth;
use App\Http\Controllers\Controller;
// use App\Models\Services;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index() {
        $services = [];
        return view("notauth.services", ['services' => $services]);
    }
}
