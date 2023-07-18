<?php

namespace App\Http\Controllers\isAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class isAuthContactController extends Controller
{

    public function add(Request $request)
    {
        $user = auth()->user();
        $target_email = $request->input('email');
        $target_user = User::where('email', $target_email)->first();

        if (!$target_user) {
            return redirect()->route('isauth.contact')->with(['status' => 'fail', 'message' => 'User does not exist.']);
        }

        $contacts = json_decode($user->contacts, true) ?? [];

        if (in_array($target_email, array_column($contacts, 'email'))) {
            return redirect()->route('isauth.contact')->with(['status' => 'fail', 'message' => 'Contact already exists.']);
        }

        $newContact = [
            'email' => $target_user->email,
            'name' => $target_user->name,
            'added' => now()->toIso8601String(),
            // Add any other properties you want to include for the contact
        ];

        $contacts[] = $newContact;
        $user->contacts = json_encode($contacts);
        $user->save();
        return redirect()->route('isauth.contact')->with(['success' => 'Contact added successfully.']);
    }

    public function get()
    {
        $user = auth()->user();

        $contacts = $user->contacts ?? [];

        return view("isauth.contact", compact('contacts'));
    }


    public function delete(Request $request, $email)
    {
        $user = auth()->user();
        $contacts = $user->contacts;

        if (empty($contacts)) {
            return redirect()->back()->with('error', 'Contact not found.');
        }

        foreach ($contacts as $key => $contact) {
            if ($contact['email'] === $email) {
                unset($contacts[$key]);
                break;
            }
        }

        $index = array_search($email, array_column($contacts, 'email'));

        unset($contacts[$index]);
        $user->contacts = $contacts;
        $user->save();

        if ($request->ajax()) {
            return response()->json(['success' => 'Contact deleted successfully.']);
        }

        return redirect()->back()->with(['success' => 'Contact deleted successfully.']);
    }
}
