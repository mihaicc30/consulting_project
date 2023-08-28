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
        return view("isadmin.users",['users' => $users]);
    }
    public function toggleBlock(Request $request) {
        
        $user = User::find($request->user_id);
        $ezeuser = EzepostUser::find($request->user_id);
        if ($user) {
            $firstChar = substr($user->controlstring, 0, 1);
            $user->controlstring = $firstChar === '0' ? '1' . substr($user->controlstring, 1) : '0' . substr($user->controlstring, 1);
            $user->save();
        }
        if ($ezeuser) {
            $firstChar = substr($ezeuser->controlstring, 0, 1);
            $ezeuser->controlstring = $firstChar === '0' ? '1' . substr($ezeuser->controlstring, 1) : '0' . substr($ezeuser->controlstring, 1);
            $ezeuser->save();
        }
        return redirect()->back();
    }
}
