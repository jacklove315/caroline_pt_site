<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

        Mail::send('mail.registered', ['name' => $user['name']], function ($message) use ($user) {
            $message->from('carolinegreen@gmail.com', 'Youre new personal trainer');
            $message->to($user['email']);
        });

        return redirect('/dashboard')->with('success', 'User added successfully');

    }
}
