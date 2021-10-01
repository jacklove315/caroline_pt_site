<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Event;
use App\Models\Programme;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProgrammesController extends Controller
{
    /**
     * Return index page
     */
    public function index()
    {
        //get necessary data
        $items = Programme::query()->get();

        return view('dashboard.programmes', compact('items'));
    }

}
