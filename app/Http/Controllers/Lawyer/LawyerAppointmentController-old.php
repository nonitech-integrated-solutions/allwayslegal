<?php

namespace App\Http\Controllers\Lawyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Appointment;
use App\Models\Time;

class LawyerAppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $timeSlots = Appointment::latest()->where('user_id', auth()->user()->id)->paginate(5);
 
        return view('lawyer.appointments.index', compact('timeSlots'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lawyer.appointments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $this->validate($request, [
            'date'=>'
                required|unique:appointments,date,NULL,id,user_id,'.\Auth::id(),
            'time'=>'required'
        ]);
        $appointment = Appointment::create([
            'user_id' => auth()->user()->id,
            'date' => $request->date
        ]);
        foreach($request->time as $time){
            Time::create([
                'appointment_id' => $appointment->id,
                'time' => $time
            ]);    
        }

        $request->session()->flash('success', 
        'Time slots created for'." ".$request->date);

        return redirect('lawyer/appointment');

        // $request->session()->flash('success', 'Appointment created for'. $request->date);

        // return redirect('lawyer/appointment');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function check(Request $request)
    {
        $date = $request->date;
        $appointment = Appointment::where('date', $date)->where('user_id', auth()->user()->id)->first();
        if(!$appointment) {
            return redirect()->to('/lawyer/appointment')->with('error', 'Appointment time is not available for this date');
        }
        $appointmentId = $appointment->id;
        $times = Time::where('appointment_id', $appointmentId)->get();

        return view('lawyer.appointments.index', compact('times', 'appointmentId', 'date'));
    }

    public function updateSlots(Request $request)
    {
        $appointmentId = $request->appointmentId;
        $appointment = Time::where('appointment_id', $appointmentId)->delete();
        foreach($request->time as $time)
        {
            Time::create([
                'appointment_id'=>$appointmentId,
                'time'=>$time,
                'status'=>0
            ]);
        }
        return redirect()->route('lawyer.appointments.index')
                ->with('success', 'Time slots successfully updated!');

    }
}
