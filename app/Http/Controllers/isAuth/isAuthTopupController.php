<?php

namespace App\Http\Controllers\isAuth;
use App\Http\Controllers\Controller;
// use App\Models\About;

use Illuminate\Http\Request;

class isAuthTopupController extends Controller
{
    public function get() {
        
        // to get user controllingstring(for plan type, amount of tokens) / token details ( price/token? stored in db? )
        $about = [];
        return view("isauth.topup", ['about' => $about]);
    }
}
