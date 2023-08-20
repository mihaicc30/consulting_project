<?php

namespace App\Http\Controllers\isAuth;

use App\Http\Controllers\Controller;
use App\Models\EzepostTracking;

class isAuthFilesController extends Controller
{
    public function getReceived()
    {
        $ezepost_addr = auth()->user()->ezepost_addr;
        $receiver_ezepost_addr = EzepostTracking::where('receiver_ezepost_addr', $ezepost_addr)->first();
        $getAllReceived = $receiver_ezepost_addr ? $receiver_ezepost_addr->getReceived($ezepost_addr) : 'No files received';

        return (view('isauth.history-received', [
            'getAllReceived' => $getAllReceived,
        ]));
    }

    public function getViewed()
    {
        $ezepost_addr = auth()->user()->ezepost_addr;
        $receiver_ezepost_addr = EzepostTracking::where('receiver_ezepost_addr', $ezepost_addr)->first();
        $getAllReceived = $receiver_ezepost_addr ? $receiver_ezepost_addr->getViewed($ezepost_addr) : 'No files received';

        return (view('isauth.history-received', [
            'getAllReceived' => $getAllReceived,
        ]));
    }

    public function getSent()
    {
        $ezepost_addr = auth()->user()->ezepost_addr;
        $receiver_ezepost_addr = EzepostTracking::where('receiver_ezepost_addr', $ezepost_addr)->first();
        $getAllReceived = $receiver_ezepost_addr ? $receiver_ezepost_addr->getSent($ezepost_addr) : 'No files received';

        return (view('isauth.history-received', [
            'getAllReceived' => $getAllReceived,
        ]));
    }

    public function getHistoryReceived()
    {
        $ezepost_addr = auth()->user()->ezepost_addr;
        $receiver_ezepost_addr = EzepostTracking::where('receiver_ezepost_addr', $ezepost_addr)->first();
        $getAllReceived = $receiver_ezepost_addr ? $receiver_ezepost_addr->getHistoryReceived($ezepost_addr) : 'No files received';

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
        $ezepost_addr = auth()->user()->ezepost_addr;
        $receiver_ezepost_addr = EzepostTracking::where('receiver_ezepost_addr', $ezepost_addr)->first();
        $getAllReceived = $receiver_ezepost_addr ? $receiver_ezepost_addr->getHistoryViewed($ezepost_addr) : 'No files received';

        return (view('isauth.history-viewed', [
            'getAllReceived' => $getAllReceived,
        ]));
    }
}
