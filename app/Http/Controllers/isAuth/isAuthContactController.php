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
        return redirect()->route('isauth.contact')->with(['status' => 'fail', 'message' => 'User does not exist.']);
    }

    $contacts = json_decode($user->contacts, true)?? [];

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
        // to grab user list of contacts and/or addresses where user sent a package(even if not added to contact) - good? :D
        return view("isauth.contact");
    }

    public function delete($email)
{
    $user = auth()->user();
    $contacts = json_decode($user->contacts, true);

    if (empty($contacts)) {
        return redirect()->back()->with('error', 'Contact not found.');
    }

    $index = array_search($email, array_column($contacts, 'email'));

    if ($index === false) {
        return redirect()->back()->with('error', 'Contact not found.');
    }

    unset($contacts[$index]);
    $user->contacts = json_encode(array_values($contacts));
    $user->save();

    return redirect()->route('isauth.contact')->with(['success' => 'Contact deleted successfully.']);
}
}
