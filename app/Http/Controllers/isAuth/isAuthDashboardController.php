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
                $vepostTrackingData = VepostTracking::where('sender_vepost_addr', $email)->first();

                $inProgressCount = $vepostTrackingData ? $vepostTrackingData->getInProgressCount($email) : 0;
                $sendingCount = $vepostTrackingData ? $vepostTrackingData->getSendingCount($email) : 0;
                $succesfulCount = $vepostTrackingData ? $vepostTrackingData->getSuccessful($email) : 0;
                $failedCount = $vepostTrackingData ? $vepostTrackingData->getFailed($email) : 0;
                $getAllReceived = $vepostTrackingData ? $vepostTrackingData->getAllReceived($email) : 0;
                $getAllSent = $vepostTrackingData ? $vepostTrackingData->getAllSent($email) : 0;
                $getLastThreeFiles = $vepostTrackingData ? $vepostTrackingData->getLastThreeFiles($email) : 0;

                Log::info('The user is: ', ['data' => $user]);
                Log::info('The user email is: ', ['data' => $email]);
                Log::info('In progress are : ', ['data' => $inProgressCount]);
                Log::info('Sending: ', ['data' => $sendingCount]);
                Log::info('Successful: ', ['data' => $succesfulCount]);
                Log::info('Failed: ', ['data' => $failedCount]);
                Log::info('All Received: ', ['data' => $getAllReceived]);
                Log::info('All Sent: ', ['data' => $getAllSent]);
                Log::info('THE LAST THREE FILES ARE: ', ['data' => $getLastThreeFiles]);

                $balance = $user ? $user->balance : null;

                if ($user) {
                        $contacts = Auth::user()->contacts;
                        $sortedContact = collect($contacts)->sortKeys();

                        $sortedContacts = $sortedContact->slice(-3)->all();

                        Log::info('LAST THREE CONTACTS: ', ['data' => $sortedContacts]);
                } else {
                        Log::info('User not found.');
                }

                return view("isauth.dashboard", [
                        'balance' => $balance,
                        'inProgressCount' => $inProgressCount,
                        'sendingCount' => $sendingCount,
                        'successfulCount' => $succesfulCount,
                        'failedCount' => $failedCount,
                        'getAllReceived' => $getAllReceived,
                        'getAllSent' => $getAllSent,
                        'sortedContacts' => $sortedContacts,
                        'getLastThreeFiles' => $getLastThreeFiles
                ]);
        }
}
