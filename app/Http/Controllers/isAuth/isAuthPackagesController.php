<?php

namespace App\Http\Controllers\isAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\EzepostTracking;

class isAuthPackagesController extends Controller
{
    public function getReceived(Request $request)
    {
        $query = $request->input("query");
        $filterDate = $request->input("filterDate") ?? "desc";
        $userEzepostAddr = auth()->user()->ezepost_addr;
        $files = EzepostTracking::query();
        if ($files) {
            $files
                ->where("receiver_ezepost_addr", $userEzepostAddr)
                ->where("file_name", "like", "%" . $query . "%")
                ->orderBy("created_at", $filterDate)->orderBy('mpID');
        }

        $totalFiles = $files->count();
        $files = $files->paginate(12); 

        return view(
            "isAuth.received",
            compact("files", "totalFiles", "filterDate")
        );
    }

    public function getSent(Request $request)
    {
        $query = $request->input("query");
        $filterDate = $request->input("filterDate") ?? "desc";
        $userEzepostAddr = auth()->user()->ezepost_addr;
        $files = EzepostTracking::query();
        if ($files) {
            $files
                ->where("sender_ezepost_addr", $userEzepostAddr)
                ->where("file_name", "like", "%" . $query . "%")
                ->orderBy("created_at", $filterDate);
        }
        $totalFiles = $files->count();
        $files = $files->paginate(12); 

        return view("isAuth.sent", compact("files", "totalFiles", "filterDate"));
    }

    public function getViewed(Request $request)
    {
        $query = $request->input("query");
        $filterDate = $request->input("filterDate") ?? "desc";
        $userEzepostAddr = auth()->user()->ezepost_addr;
        $files = EzepostTracking::query();
        if ($files) {
            $files
                ->where("receiver_ezepost_addr", $userEzepostAddr)
                ->where("file_name", "like", "%" . $query . "%")
                ->whereNotNull("time_post_opened")
                ->orderBy("created_at", $filterDate);
        }
        $totalFiles = $files->count();
        $files = $files->paginate(12); 

        return view("isAuth.viewed", compact("files", "totalFiles", "filterDate"));
    }
}
