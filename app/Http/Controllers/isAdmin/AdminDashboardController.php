<?php

namespace App\Http\Controllers\isAdmin;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Plans;
use App\Models\EzepostTracking;
use App\Models\Message;

class AdminDashboardController extends Controller
{
    public function get() {
        $users = User::all(); // Retrieve all users from the database
        $mostRecent = User::orderBy('created_at', 'desc')->take(3)->get(); // Retrieve the 3 most recent users
        $count = [];
        
        $countAccountType = [
            '00' => 0,
            '01' => 0,
            '02' => 0,
            '03' => 0,
            '10' => 0,
            '11' => 0,
            '12' => 0,
            '13' => 0,
        ];
        foreach ($users as $user) {
            $controlString = $user->controlstring;
            $characters = substr($controlString, 1, 2);
        
            if (isset($countAccountType[$characters])) {
                $countAccountType[$characters]++;
            }
        }
        $totalFiles = EzepostTracking::count();
        $fiveMostRecentFiles = EzepostTracking::orderBy('created_at', 'desc')->take(5)->get();
        $contactMessages = Message::all();
        $fiveMostRecentMessages = Message::orderBy('created_at', 'desc')->take(5)->get();

        return view("isAdmin.dashboard", ['userCount' => $countAccountType, 'recentUsers' => $mostRecent, 'fiveMostRecentFiles' => $fiveMostRecentFiles,'fiveMostRecentMessages' => $fiveMostRecentMessages, 'totalFiles' => $totalFiles, 'contactMessages' => $contactMessages]);
    }
}