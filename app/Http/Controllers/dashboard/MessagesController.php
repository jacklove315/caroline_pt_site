<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MessagesController extends Controller
{

    /**
    * Return message index page
    */
    public function index()
    {
        return view('dashboard.message');
    }
}
