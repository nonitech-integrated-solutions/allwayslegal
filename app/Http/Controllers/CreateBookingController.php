<?php

namespace App\Http\Controllers;
//namespace Carbon\Carbon;

use Illuminate\Http\Request;

use App\Models\Area;
use App\Models\Lawyer;
use App\Models\Appointment;
use App\Models\Time;

class CreateBookingController extends Controller
{

    public function practiceAreas()
    {
        return view('booking.practice-areas', [
            'areas' => Area::paginate(15)
        ]);
    }

    public function lawyerSelection($id)
    {   
        return view('booking.lawyer-selection', [     
            'areas' => Area::all(),  
            'lawyers' => Lawyer::all(),
           'lawyer_area' => Area::find($id),
           'lawyer_areas' => Area::all()
        ]);
    }    

    public function lawyerSelected($id)
    {   
        return view('booking.lawyer-selected', [
            'lawyer_area' => Area::find($id),
            'lawyer' => Lawyer::find($id),
            'areas' => Area::all(),
            'appointment' => Appointment::where('user_id',$id)
        ]);
    }
    

    public function lawyerSchedule($id)
    {   
        return view('booking.lawyer-schedule', [
            'lawyer_area' => Area::find($id),
            'lawyer' => Lawyer::find($id),
            'areas' => Area::all(),
            'appointment' => Appointment::where('user_id',$id)
        ]);
    }

    public function caseSummary()
    {     
        return view('booking.case-summary');
    }

    public function bookingConfirmation()
    {
        return view('booking.confirmation');
    }

}
