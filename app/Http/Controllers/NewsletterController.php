<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

use App\Models\Newsletter;

class NewsletterController extends Controller
{
    public function submit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json(['error' => 'Invalid email'], 400);
        }

        $email = $request->input('email');

        // Save the email to the database
        $newsletter = new Newsletter;
        $newsletter->email = $email;
        $newsletter->save();

        // Return a success JSON response
        return response()->json(['success' => 'Email saved'], 200);
    }
}
