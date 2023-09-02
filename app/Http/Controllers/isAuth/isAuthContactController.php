<?php

namespace App\Http\Controllers\isAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class isAuthContactController extends Controller
{

    public function add(Request $request)
    {
        $user = auth()->user();
        $target_email = $request->input('email');
        $target_user = User::where('email', $target_email)->first();

        if (!$target_user) {
            return redirect()->route('isAuth.contact')->with(['status' => 'fail', 'message' => 'User does not exist.']);
        }

        $contacts = json_decode($user->contacts, true) ?? [];

        if (in_array($target_email, array_column($contacts, 'email'))) {
            return redirect()->route('isAuth.contact')->with(['status' => 'fail', 'message' => 'Contact already exists.']);
        }

        $email =  $target_user->email;
        $name = $target_user->name;
        $contacts[$name] = ['email' => $email];

        $newContact = json_encode($contacts);
        $user->contacts = $newContact;
        $user->save();

        return redirect()->route('isAuth.contact')->with(['success' => 'Contact added successfully.']);
    }

    public function get()
    {
        $user = auth()->user();

        $contacts = $user->contacts ?? [];

        return view("isAuth.contact", compact('contacts'));
    }


    public function delete(Request $request, $email)
    {
        $user = auth()->user();
        $contacts = $user->contacts;

        if (empty($contacts)) {
            return redirect()->back()->with('error', 'Contact not found.');
        }

        $contactsArray = json_decode($contacts, true);

        // Normalize the email for comparison
        $email = strtolower(trim($email));

        // Iterate through the contacts array
        foreach ($contactsArray as $name => $contact) {
            if (isset($contact['email']) && strtolower(trim($contact['email'])) === $email) {
                unset($contactsArray[$name]);
                break;
            }
        }

        $user->contacts = json_encode($contactsArray);
        $user->save();

        if ($request->ajax()) {
            return response()->json(['success' => 'Contact deleted successfully.']);
        }

        return redirect()->back()->with(['success' => 'Contact deleted successfully.']);
    }
}
