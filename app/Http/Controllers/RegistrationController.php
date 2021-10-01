<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    /*
     * Display register page
     */
    public function create()
    {
        return view('/auth/register');
    }

    /*
     * Create user
     */
    public function store(Request $request)
    {

        $attributes = $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
        ]);

        //hash password
        $attributes['password'] = bcrypt($attributes['password']);

        $user = User::create($attributes);

        //log the user in
        auth()->login($user);

        return redirect('/')->with('success', 'User added successfully');

    }
}
