<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrationRequest;
use App\Models\User;
use App\Models\ezepostUser;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use Illuminate\Support\Str;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(RegistrationRequest $request): RedirectResponse
    {

        $passwordHash = Hash::make($request->password);
        $ezepost_addr = Str::uuid();

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $passwordHash,
            'ezepost_addr' => $ezepost_addr,
        ]);

        $ezepost_user = ezepostUser::create([
            'displayname' => $request->name,
            'ezepost_addr' => $ezepost_addr,
            'password' => $passwordHash,
            'username' => $request->username,
        ]);

        event(new Registered($user));
        event(new Registered($ezepost_user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
