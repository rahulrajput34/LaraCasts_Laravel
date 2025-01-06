<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;


class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        // validate the form
        // we can also pass it like  this
        // 'email' => 'required|email' but  below one is better
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        // attempt to login the user
        // attempt requires the email and password
        if(!Auth::attempt($attributes)) {
           throw ValidationException::withMessages([
            'email' => 'Sorry, those credentials are not correct.'
            ]);
        }

        // regenerate the session token
        // this is to prevent session fixation attack
        request()->session()->regenerate();


        // redirect to the home page
        return redirect('/jobs');
    }

    public function destroy()
    {
        Auth::logout();

        return redirect('/');
    }
    
}
