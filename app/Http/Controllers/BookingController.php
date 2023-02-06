<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Schedule;
use App\Models\Appointment;
use App\Models\Lawyer;
use Carbon\CarbonInterval;
use Illuminate\Http\Request;
use App\Bookings\TimeSlotGenerator;
use App\Bookings\Filters\SlotsPassedTodayFilter;
use App\Bookings\Filters\UnavailabilityFilter;
use App\Bookings\Filters\AppointmentFilter;

class BookingController extends Controller
{   

    public function __invoke()
    {   

        $schedule = Schedule::find(1);
        $service = Service::find(2);
       
        $lawyer = Lawyer::find(1);

        $slots = $lawyer->availableTimeSlots($schedule, $service);

        return view('booking.create', [
            'slots' => $slots
            ]);
    }

}
