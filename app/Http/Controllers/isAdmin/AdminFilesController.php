<?php

namespace App\Http\Controllers\isAdmin;
use App\Http\Controllers\Controller;
use App\Models\EzepostTracking;
use App\Models\EzepostUser;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;

class AdminFilesController extends Controller
{
    public function get(Request $request) {
        $query = $request->input('query');
        $filterDate = $request->input('filterDate') ?? 'desc';
        $userFilter = $request->input('userFilter') ?? '';
        $ezeusers = EzepostUser::pluck('username');
        $transfers = EzepostTracking::query();
        if ($query) {
            $transfers->where('file_name', 'like', '%' . $query . '%');
        }
    
        if ($userFilter) {
            $transfers->where(function ($query) use ($userFilter) {
                $query->where('sender_username', 'like', '%' . $userFilter . '%')
                    ->orWhere('receiver_username', 'like', '%' . $userFilter . '%');
            });
        }
        $totalFiles = $transfers->count();
        $transfers = $transfers->orderBy('created_at', $filterDate)->orderBy('mpID')->paginate(12);

        return view("isadmin.transfers",compact('transfers','filterDate','query','ezeusers','userFilter','totalFiles'));
    }

    
    public function toggleDelete(Request $request) {
        $transfers = EzepostTracking::find($request->transferid);
        if ($transfers) {
            if ($transfers->deleted_at === null) {
                $transfers->deleted_at = date('Y-m-d H:i:s');
            } else {
                $transfers->deleted_at = null;
            }
            $transfers->save();
        }
        return redirect()->back();
    }
}
