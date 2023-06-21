<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PackagesController extends Controller
{
    public function index() {
        $packages = "Packages List form in PackagesController";
        return view("packages.index", ['packages' => $packages]);
    }
}
