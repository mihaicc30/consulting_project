<?php

namespace App\Http\Controllers\isAdmin;
use App\Http\Controllers\Controller;
// use App\Models\Home;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function get() {
        return view("isadmin.messages");
    }
}
