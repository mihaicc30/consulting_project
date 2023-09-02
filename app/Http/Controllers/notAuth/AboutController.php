<?php

namespace App\Http\Controllers\notAuth;
use App\Http\Controllers\Controller;
// use App\Models\About;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        $about = [];
        return view("notAuth.about", ['about' => $about]);
    }
}
