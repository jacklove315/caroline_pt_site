<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Todo;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    /**
     * Return index page
     */
    public function index()
    {
        $todos = Todo::where('user_id', auth()->user()->id);

        return view('dashboard.todos', compact($todos));
    }

}
