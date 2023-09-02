<?php

namespace App\Http\Controllers\notAuth;
use App\Http\Controllers\Controller;
// use App\Models\Contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        $contact = [];
        return view("notAuth.contact", ['contact' => $contact]);
    }
}
