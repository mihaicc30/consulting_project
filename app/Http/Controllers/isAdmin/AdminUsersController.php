<?php

namespace App\Http\Controllers\isAdmin;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\EzepostUser;
use Illuminate\Http\Request;

class AdminUsersController extends Controller
{
    public function get() {
        $users = User::orderBy('created_at', 'desc')->get();
        return view("isAdmin.users",['users' => $users]);
    }
    public function toggleBlock(Request $request) {
        
        $user = User::find($request->user_id);
        $ezeuser = EzepostUser::find($request->user_id);
        if ($user) {
            $tempControlString = $user->controlstring;
            $tempControlString[5] = $tempControlString[5] === '0' ? '1' : '0';
            $user->controlstring = $tempControlString;
            $user->save();
        }
        
        if ($ezeuser) {
            $tempControlString = $ezeuser->controlstring;
            $tempControlString[5] = $tempControlString[5] === '0' ? '1' : '0';
            $ezeuser->controlstring = $tempControlString;
            $ezeuser->save();
        }
        return redirect()->back();
    }
}
