<?php

namespace App\Http\Controllers\isAuth;
use App\Http\Controllers\Controller;
use App\Models\Transfers;

use Illuminate\Http\Request;

class isAuthFilesController extends Controller
{

    public function get() {
        // $transfers = Transfers::get();
        
        // to get and send to web page all data related to user and transfers
        $transfers = ["x", "y"]; // fake data
         return view("isauth.files", ['transfers' => $transfers]);
    }
}
