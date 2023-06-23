<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;

class UnauthServicesController extends Controller
{
    public function index() {
        $services = ["services"];
        return view("unauth.services.index", ['services' => $services]);
    }
}
