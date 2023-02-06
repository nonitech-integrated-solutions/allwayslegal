<?php

namespace App\Http\Livewire;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Validation\Validator;
use Livewire\Component;
use Carbon\CarbonInterval;
use App\Models\Area;
use App\Models\Service;
use App\Models\Lawyer;
use App\Models\Schedule;
use App\Bookings\TimeSlotGenerator;
use App\Bookings\Filters\SlotsPassedTodayFilter;
use App\Models\appointment;
use Livewire\WithFileUploads;

class CreateBooking extends Component
{   

    use WithFileUploads;
    public $lawyers = 0;
    public $selected_area = 0;
    public $lawyer_area;
    public $lawyerz;
    public $lawyer;
    public $schedule;
    public $date;
    public $calendarStartDate;
    public $case_summary;
    public $card_info;

    public $state = [

        'area' => '',
        'service' => '',
        'lawyer' => '',
        'time' => '',
        'case_title' => '',
        'case_note' => '',
        'case_file' => ''
    ];

    public function mount()
    {    
       $this->state['lawyer'] = $this->lawyers;
       
    }

    protected $listeners = [
    
        'updated-booking-time' => 'setTime'
    ];

    protected function rules ()
    {
        return [
            'state.area' => 'required|exists:areas,id',
            'state.service' => 'required|exists:services,id',
            'lawyer' => 'required|exists:lawyers,id',
            'state.time' => 'required|numeric',
            'state.case_title' => 'required|string',
            'state.case_note' => 'required|string',
            'state.case_file' => 'sometimes|image'
        ];
    }

    public function createBooking ()
    {   

   // $this->validate();

       $bookingFields = [

            'date' => $this->timeObject->toDateString(),
            'start_time' => $this->timeObject->toTimeString(),
            'end_time' => $this->timeObject->clone()->addMinutes(
            )->toTimeString(),
            'client_name' => auth()->user()->name,
            'client_email' => auth()->user()->email,
            'practice_area' => $this->selectedArea->name." ".'law',
            'service_title' => $this->selectedService->title,
            'lawyer_name' => $this->lawyerz->user->name,
            'case_title' => $this->state['case_title'],
            'case_note' => $this->state['case_note'],
            'case_file' => $this->state['case_file']

       ];

       $appointment = Appointment::make($bookingFields);

       $appointment->service()->associate($this->selectedService);
       $appointment->lawyer()->associate($this->lawyerz);

       dd($appointment);

       $appointment->save();

       return redirect()->to(route('bookings.show', $appointment) . '?token=' . $appointment->token);
    }

    public function setTime($time)
    {
        $this->state['time'] = $time;
    }

    public function updatedTime ($time)
    {
        $this->emitUp('updated-booking-time', $time);
    }

    public function updatedStateService($serviceID)
    {
        $this->state['lawyer'] = '';

        $this->clearTime();

        return;

     //   $this->lawyers = $this->selectedService->lawyers;
    }

    public function updatedStateArea($areaID)
    {
        $this->state['lawyer'] = '';

        if (!$areaID)
        {
          $this->lawyers = collect();

            return;
        }

        $this->lawyers = $this->selectedArea->lawyers;
    }


    public function updatedStateLawyer($lawyerID)
    {
     
        $this->clearTime();
    }


    public function clearTime ()
    {
        $this->state['time'] = '';
    }


    public function getSelectedServiceProperty()
    {   
        
        if(!$this->state['service'])
        {
            return null;
        }

        return Service::find($this->state['service']);
    }

    public function getSelectedAreaProperty()
    {          

        if(!$this->state['area'])
        {
            return null;
        }

        return Area::find($this->state['area']);
    }


    public function getSelectedLawyerProperty()
    {   
        
        if(!$this->state['lawyer'])
        {
            return null;
        }

        return Lawyer::find($this->state['lawyer']);
    }

    public function getHasDetailsToBookProperty ()
    {
        return $this->state['service'] && 
        $this->lawyers && $this->state['time'] && 
        $this->case_summary = true;
    }

    public function showBill ()
    {   
       return $this->state['case_title'] && $this->card_info = true;
    }

    public function getHasCaseInfoProperty ()
    {
        return $this->showBill();   
    }

    public function getTimeObjectProperty ()
    {
        return Carbon::createFromTimestamp($this->state['time']);
    }

    public function getLawyers($area)
    {   

    //$areas => Area::paginate(15);
    $lawyers = Lawyer::all();
    $lawyer_area = Area::find($area);
    $this->selected_area = $lawyer_area;  
    $this->lawyers = $lawyer_area->lawyers;

    }

    public function getLawyerInfo($id)
    {   

    $areas = Area::all();
    $this->lawyerz = Lawyer::find($id);
    $lawyer_area = Area::find($id);
    $lawyer_areas = Area::all();

    }

    public function goToShedule()
    {    
        
    $this->schedule = true;
  
    }

    public function render()
    {        

        $areas =  Area::paginate(15);
        $services = Service::get();
        
        return view('livewire.create-booking', 

        [

        'areas' => $areas,
        'services' => $services

        ]);
    }

    
}

