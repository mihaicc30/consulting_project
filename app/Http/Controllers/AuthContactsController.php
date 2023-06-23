<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthContactsController extends Controller
{
    public function index() {
        $contacts = [];
        return view("isauth.contacts.index", ['contacts' => $contacts]);
    }
}
