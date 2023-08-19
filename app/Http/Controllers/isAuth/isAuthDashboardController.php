<?php

namespace App\Http\Controllers\isAuth;

use App\Http\Controllers\Controller;
use App\Models\ezepostTracking;
use App\Models\ezepostUser;
use Illuminate\Support\Facades\Auth;

class isAuthDashboardController extends Controller
{
        public function get()
        {
                // need to get multiple data like>
                // - total transfers/ total sent/ total failed/ total received
                // - user account string > ezepost_user > controllingstring from where will have user group, account state, plan type, tokens
                // Retrieve the email of the authenticated user
                $email = Auth::user()->email;

                // Retrieve the user's balance
                $user = ezepostUser::where('ezepost_addr', $email)->first();

                // Retrieve active transmissions
                $ezepostTrackingData = ezepostTracking::where('receiver_ezepost_addr', $email)->first();
                $inProgressCount = $ezepostTrackingData ? $ezepostTrackingData->getInProgressCount($email) : 0;
                $getAllReceived = $ezepostTrackingData ? $ezepostTrackingData->getAllReceived($email) : 0;

                $ezepostFiles = ezepostTracking::where('sender_ezepost_addr', $email)->first();
                $getAllSent = $ezepostFiles ? $ezepostFiles->getAllSent($email) : 0;
                $succesfulCount = $ezepostFiles ? $ezepostFiles->getSuccessful($email) : 0;
                $failedCount = $ezepostFiles ? $ezepostFiles->getFailed($email) : 0;
                $sendingCount = $ezepostFiles ? $ezepostFiles->getSendingCount($email) : 0;
                $yourInProgressCount = $ezepostFiles ? $ezepostFiles->yourInProgressCount($email) : 0;

                $getLastThreeFiles = ezepostTracking::where(function ($query) use ($email) {
                        $query->where('sender_ezepost_addr', $email)
                                ->orWhere('receiver_ezepost_addr', $email);
                })
                        ->orderBy('created_at', 'desc')
                        ->take(3)
                        ->get();

                $balance = $user ? $user->balance : null;

                if ($user && Auth::user()->contacts) {
                        $contacts = Auth::user()->contacts;
                        $sortedContact = collect($contacts)->sortKeys();
                        $sortedContacts = $sortedContact->slice(-3)->all();

                        $sortedContacts = array_map(function ($contactData) {
                                $decodedContact = json_decode($contactData, true);
                                return $decodedContact;
                        }, $sortedContacts);
                } else {
                        $sortedContacts = null;
                }

                return view("isauth.dashboard", [
                        'balance' => $balance,
                        'inProgressCount' => $inProgressCount,
                        'sendingCount' => $sendingCount,
                        'successfulCount' => $succesfulCount,
                        'failedCount' => $failedCount,
                        'getAllReceived' => $getAllReceived,
                        'getAllSent' => $getAllSent,
                        'sortedContacts' => $sortedContacts === null ? $sortedContacts : $sortedContacts[0],
                        'getLastThreeFiles' => $getLastThreeFiles,
                        'yourInProgressCount' => $yourInProgressCount
                ]);
        }
}
