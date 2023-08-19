<?php

namespace App\Http\Controllers\isAuth;

use App\Http\Controllers\Controller;

class isAuthFilesController extends Controller
{
    public function getReceived()
    {
        $user = auth()->user();

        return (view('isauth.received', [
            'user' => $user,
        ]));
    }

    public function getViewed()
    {
    }

    public function getSent()
    {
    }

    public function getHistoryReceived()
    {
    }

    public function getHistoryViewed()
    {
    }

    public function getHistorySent()
    {
    }
}
