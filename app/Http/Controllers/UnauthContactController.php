<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class UnauthContactController extends Controller
{
    public function index() {
        $contact = ["contact"];
        return view("unauth.contact.index", ['contact' => $contact]);
    }
}
