<?php

namespace App\Http\Controllers\isAuth;

use App\Http\Controllers\Controller;
use App\Models\EzepostTracking;
use Illuminate\Support\Facades\Log;

class isAuthFilesController extends Controller
{
    public function getReceived()
    {
    }

    public function getViewed()
    {
    }

    public function getSent()
    {
    }

    public function getHistoryReceived()
    {
        $ezepost_addr = auth()->user()->ezepost_addr;
        $receiver_ezepost_addr = EzepostTracking::where('receiver_ezepost_addr', $ezepost_addr)->first();
        $getAllReceived = $receiver_ezepost_addr ? $receiver_ezepost_addr->getAllReceived($ezepost_addr) : 'No files received';

        return (view('isauth.history-received', [
            'getAllReceived' => $getAllReceived,
        ]));
    }

    public function getHistoryViewed()
    {
        $ezepost_addr = auth()->user()->ezepost_addr;
        $receiver_ezepost_addr = EzepostTracking::where('receiver_ezepost_addr', $ezepost_addr)->first();
        $getAllReceived = $receiver_ezepost_addr ? $receiver_ezepost_addr->getHistoryViewed($ezepost_addr) : 'No files received';

        return (view('isauth.history-viewed', [
            'getAllReceived' => $getAllReceived,
        ]));
    }

    public function getHistorySent()
    {
    }
}
