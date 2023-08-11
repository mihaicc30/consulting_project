<?php

namespace App\Http\Controllers\isAuth;

use App\Http\Controllers\Controller;
use App\Models\VepostTracking;
use App\Models\VepostUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class isAuthDashboardController extends Controller
{
        public function get()
        {
                // need to get multiple data like>
                // - total transfers/ total sent/ total failed/ total received
                // - user account string > vepost_user > controllingstring from where will have user group, account state, plan type, tokens
                // Retrieve the email of the authenticated user
                $email = Auth::user()->email;

                // Retrieve the user's balance
                $user = VepostUser::where('vepost_addr', $email)->first();

                // Retrieve active transmissions
                $vepostTrackingData = VepostTracking::where('receiver_vepost_addr', $email)->first();
                $inProgressCount = $vepostTrackingData ? $vepostTrackingData->getInProgressCount($email) : 0;
                $getAllReceived = $vepostTrackingData ? $vepostTrackingData->getAllReceived($email) : 0;

                $vepostFiles = VepostTracking::where('sender_vepost_addr', $email)->first();
                $getAllSent = $vepostFiles ? $vepostFiles->getAllSent($email) : 0;
                $succesfulCount = $vepostFiles ? $vepostFiles->getSuccessful($email) : 0;
                $failedCount = $vepostFiles ? $vepostFiles->getFailed($email) : 0;
                $sendingCount = $vepostFiles ? $vepostFiles->getSendingCount($email) : 0;
                $yourInProgressCount = $vepostFiles ? $vepostFiles->yourInProgressCount($email) : 0;

                $getLastThreeFiles = VepostTracking::where(function ($query) use ($email) {
                        $query->where('sender_vepost_addr', $email)
                                ->orWhere('receiver_vepost_addr', $email);
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
