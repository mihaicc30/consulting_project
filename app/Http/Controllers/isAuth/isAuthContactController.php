<?php

namespace App\Http\Controllers\isAuth;
use App\Http\Controllers\Controller;
use App\Models\User;

use Illuminate\Http\Request;

class isAuthContactController extends Controller
{
    public function get() 
    {
        // to grab user list of contacts and/or addresses where user sent a package(even if not added to contact) - good? :D
        return view("isauth.contact");
    }

    
    public function delete($email)
    {
        // Find the authenticated user
        $user = auth()->user();

        // Convert the contacts property from JSON string to JSON object
        $contacts = json_decode($user->contacts, true);

        // Check if the contacts object is not null and has the contact with the given email
        if (!empty($contacts)) {
            // Find the index of the contact with the given email
            $index = array_search($email, array_column($contacts, 'email'));
    
            if ($index !== false) {
                // Remove the contact from the contacts array
                array_splice($contacts, $index, 1);
    
                // Encode the contacts array back to JSON string
                $user->contacts = json_encode($contacts);
                $user->save();
    
                // Redirect back or return a response indicating success
                return redirect()->back()->with('success', 'Contact deleted successfully.');
            }
        }

        // Redirect back or return a response indicating failure
        return redirect()->back()->with('error', 'Contact not found.');
    }
}
