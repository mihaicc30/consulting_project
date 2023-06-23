<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthFilesController extends Controller
{
    public function index() {
        $files = [];
        return view("files.index", ['files' => $files]);
    }
}
