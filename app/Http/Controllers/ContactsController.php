<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index() {
        $contacts = [];
        return view("contacts.index", ['contacts' => $contacts]);
    }
}
