<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class EventBooking extends Model
{
    use HasFactory;

    protected $table = 'event_bookings';

    /*
     * Returns a relation with event
     *
    */
    public function event(): HasOne
    {
        return $this->hasOne(Event::class);
    }

}
