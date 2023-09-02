<?php

namespace App\Http\Controllers\isAuth;

use App\Http\Controllers\Controller;
use App\Models\EzepostTracking;
use App\Models\EzepostUser;
use Illuminate\Support\Facades\Auth;

class isAuthDashboardController extends Controller
{
    public function get()
    {
        $userEzepostAddr = Auth::user()->ezepost_addr;

        // dd(Auth::user()->ezepost_addr);
        $packages = [];
        $files = [];
        $balance = EzepostUser::where('ezepost_addr', $userEzepostAddr)->value('balance');

        
        $totalPackages = EzepostTracking::where(function ($query) use ($userEzepostAddr) {
                $query->where('sender_ezepost_addr', $userEzepostAddr)
                    ->orWhere('receiver_ezepost_addr', $userEzepostAddr);
            })->count();

        $receivedPackages = EzepostTracking::where('receiver_ezepost_addr', $userEzepostAddr)->count();
        $sentPackages = $totalPackages - $receivedPackages;

        $viewedPackages = EzepostTracking::where('receiver_ezepost_addr', $userEzepostAddr)
        ->whereNotNull('time_post_opened')->count();

        $packages = [
                'totalPackages' => $totalPackages,
                'received' => $receivedPackages,
                'sent' => $sentPackages,
                'viewed' => $viewedPackages,
        ];
        $recentTrans = EzepostTracking::where(function ($query) use ($userEzepostAddr) {
                $query->where('sender_ezepost_addr', $userEzepostAddr)
                    ->orWhere('receiver_ezepost_addr', $userEzepostAddr);
            })->orderBy('created_at', 'desc')->take(3)->get();
        $recentTransCount = $recentTrans->count();


        return view("isAuth.dashboard", compact('recentTransCount','packages','recentTrans','balance') );
    }
}
