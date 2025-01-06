<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function create()
    {

        return view('auth.register');    
    }

    public function store()
    {
        // validate the request
        // We can give more validation rules here inside the password
        // when we give the confirmed over here its looking for the password_confirmation field in the form
        // The encrypted password (hashed password) will be stored in the database because we give the password hashed inside the User model
        $attribute = request()->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', Password::min(6), 'confirmed']
        ]);

        
        // create the user
        // User::create([
        //     'first_name' => request('first_name'),
        //     'last_name' => request('last_name'),
        //     'email' => request('email'),
        //     'password' => bcrypt(request('password'))
        // ]);


        // Or we can store the validation inside the variable and pass it to the create method  and create the user inside the database because it will be return exact same what we want like  above commented code, we can dd it to check
        $user = User::create($attribute);

        // log in
        Auth::login($user);

        // redirect to the home page
        return redirect('/jobs');
    }
}
