<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
     * Display login page
     */
    public function create()
    {
        return view('auth.login');
    }

    /*
     * Handle login request
     */
    public function login(Request $request)
    {
        $attributes = $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);

        //attempt to authenticate the user
        //with the provided credentials
        //attempt logs you in and checks if you exist also
        if (auth()->attempt($attributes)) {

            //regenerate the users session
            session()->regenerate();

            return redirect('/dashboard')->with('success', 'Successfully logged in!');
        }

        //else if auth fails
        return back()->withErrors(['email' => 'Account doesnt exist']);
    }
}
