<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use App\Models\Event;
use App\Models\EventBooking;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Return index page
     */
    public function index()
    {
        //get necessary data
        $announcements = Announcement::query()->get();

        //Get classes and users bookings for them classes
        $events = Event::query()
            ->with([
                'bookings' => function ($q) {
                $q->where('user_id', auth()->user()->id);
                }
            ])
            ->get();

        $this->setData('announcements', $announcements);
        $this->setData('events', $events);

        return $this->view('dashboard.index');
    }

    /**
     * Attend an event or unattended an event
     */
    public function eventInteraction(Request $request)
    {
        $event = Event::where('id', $request->eventId)->first();

        if ($request->attending) {
            //Create new booking
            $booking = new EventBooking();
            $booking->insert([
                'user_id' => $request->userId,
                'event_id' => $request->eventId
            ]);
            return $booking;
        }
    }


}
