<?php

namespace App\Http\Controllers\isAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\EzepostTracking;

class isAuthPackagesController extends Controller
{
    public function getReceived(Request $request) 
    {
        $query = $request->input('query');
        $filterDate = $request->input('filterDate') ?? 'desc';
        $userEzepostAddr = auth()->user()->ezepost_addr;
        $files = EzepostTracking::query();
        if ($files) {
            $files->where('receiver_ezepost_addr', $userEzepostAddr)
            ->where('file_name', 'like', '%' . $query . '%')
            ->orderBy('created_at', $filterDate);
        }
    
        $totalFiles = $files->count();
        $files = $files->paginate(12); // You can adjust the number per page (8 in this example)
        
            // return view("isadmin.transfers",compact('transfers'));
        // $ezepost_addr = auth()->user()->ezepost_addr;
        // $receiver_ezepost_addr = EzepostTracking::where('receiver_ezepost_addr', $ezepost_addr)->first();
        // $receivedPackages = $receiver_ezepost_addr ? count($receiver_ezepost_addr->getHistoryReceived($ezepost_addr)) : 0;
        // $sentPackages = $receiver_ezepost_addr ? count($receiver_ezepost_addr->getHistorySent($ezepost_addr)) : 0;
        // $viewedPackages = $receiver_ezepost_addr ? count($receiver_ezepost_addr->getHistoryViewed($ezepost_addr)) : 0;
        // $totalPackages = $viewedPackages + $sentPackages + $receivedPackages;


        return view('isauth.received', compact('files', 'totalFiles','filterDate'));
    }

    
    public function getSent(Request $request) 
    {
        $query = $request->input('query');

        $userEzepostAddr = auth()->user()->ezepost_addr;
        $files = EzepostTracking::query();
        if ($files) {
            $files->where('sender_ezepost_addr', $userEzepostAddr)
            ->where('file_name', 'like', '%' . $query . '%')
            ->orderBy('created_at', 'desc');
        }
        $totalFiles = $files->count();
        $files = $files->paginate(12); // You can adjust the number per page (8 in this example)
        
            // return view("isadmin.transfers",compact('transfers'));
        // $ezepost_addr = auth()->user()->ezepost_addr;
        // $receiver_ezepost_addr = EzepostTracking::where('receiver_ezepost_addr', $ezepost_addr)->first();
        // $receivedPackages = $receiver_ezepost_addr ? count($receiver_ezepost_addr->getHistoryReceived($ezepost_addr)) : 0;
        // $sentPackages = $receiver_ezepost_addr ? count($receiver_ezepost_addr->getHistorySent($ezepost_addr)) : 0;
        // $viewedPackages = $receiver_ezepost_addr ? count($receiver_ezepost_addr->getHistoryViewed($ezepost_addr)) : 0;
        // $totalPackages = $viewedPackages + $sentPackages + $receivedPackages;
        return view('isauth.sent', compact('files', 'totalFiles'));

    }

    public function getViewed(Request $request) 
    {
        $query = $request->input('query');

        $userEzepostAddr = auth()->user()->ezepost_addr;
        $files = EzepostTracking::query();
        if ($files) {
            $files->where('receiver_ezepost_addr', $userEzepostAddr)
            ->where('file_name', 'like', '%' . $query . '%')
            ->whereNotNull('time_post_opened')
            ->orderBy('created_at', 'desc');
        }
        $totalFiles = $files->count();
        $files = $files->paginate(12); // You can adjust the number per page (8 in this example)
        
            // return view("isadmin.transfers",compact('transfers'));
        // $ezepost_addr = auth()->user()->ezepost_addr;
        // $receiver_ezepost_addr = EzepostTracking::where('receiver_ezepost_addr', $ezepost_addr)->first();
        // $receivedPackages = $receiver_ezepost_addr ? count($receiver_ezepost_addr->getHistoryReceived($ezepost_addr)) : 0;
        // $sentPackages = $receiver_ezepost_addr ? count($receiver_ezepost_addr->getHistorySent($ezepost_addr)) : 0;
        // $viewedPackages = $receiver_ezepost_addr ? count($receiver_ezepost_addr->getHistoryViewed($ezepost_addr)) : 0;
        // $totalPackages = $viewedPackages + $sentPackages + $receivedPackages;


        return view('isauth.viewed', compact('files', 'totalFiles'));
    }

}
