<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    /**
     * Return index page
     */
    public function index()
    {
        return view('dashboard.classes');
    }

    /**
     * Get all classes
     */
    public function getAll()
    {
        //get all classes within 7 days from
        return Event::query()->with('bookings')->get();
    }

    /**
     * Get filtered dates
     */
    public function getClassByDate(Request $request)
    {
        //make carbon object form date object sent from vue
        $filteredDate = Carbon::parse($request->date);

        return Event::where('date', $filteredDate->toDateString())->with('bookings')->get();
    }

    /**
     * Booking class
     */
    public function bookClass(Request $request)
    {

        $newBooking =  new Booking();

        $newBooking->class_id = $request->class_id;
        $newBooking->user_id = auth()->user()->id;
        $newBooking->save();

        //return updated list of classes
        return Event::query()->with('bookings')->get();

    }


}
