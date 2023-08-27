<?php

namespace App\Http\Controllers\isAdmin;
use App\Http\Controllers\Controller;
use App\Models\EzepostTracking;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;

class AdminFilesController extends Controller
{
    public function get(Request $request) {
        $query = $request->input('query');
        $transfers = EzepostTracking::query();
        if ($query) {
            $transfers->where('file_name', 'like', '%' . $query . '%');
        }
    
        $transfers = $transfers->paginate(8); // You can adjust the number per page (8 in this example)
    
        return view("isadmin.transfers",compact('transfers'));
    }
}
