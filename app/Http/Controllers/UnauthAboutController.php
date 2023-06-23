<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class UnauthAboutController extends Controller
{
    public function index() {
        $about = ["about"];
        return view("unauth.about.index", ['about' => $about]);
    }
}
