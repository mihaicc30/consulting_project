<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index() {
        $contacts = "contacts List form in contactsController";
        return view("contacts.index", ['contacts' => $contacts]);
    }
}
