<?php

namespace App\Http\Livewire;

use Illuminate\Support\Carbon;
use Carbon\CarbonInterval;
use Carbon\CarbonPeriod;

use Livewire\Component;

class BookingCalendar extends Component
{    
    public $date;
    public $calendarStartDate;
    public $lawyer;
    public $area;
    public $service;
    public $time;

    public function mount()
    {
        $this->calendarStartDate = now();

        $this->setDate(now()->timestamp);
    }

    public function updatedTime($time)
    {
        $this->emitUp('updated-booking-time', $time);
    }

    public function getLawyerScheduleProperty()
    {   

        return $this->lawyer->schedules()
            ->whereDate('date', $this->calendarSelectedDateObject)
            ->first();
    }

    public function getCalendarSelectedDateObjectProperty()
    {
        return Carbon::createFromTimestamp($this->date);
    }

    public function setDate($timestamp)
    {
        $this->date = $timestamp;

    //    dd($this->lawyerSchedule);
    }

    public function getAvailableTimeSlotsProperty()
    {
        if (!$this->lawyer || !$this->lawyerSchedule) {
            return collect();
        }

        return $this->lawyer->availableTimeSlots($this->lawyerSchedule, $this->service);
    }

    public function getCalendarWeekIntervalProperty()
    {
        return CarbonInterval::days(1)
            ->toPeriod(
                $this->calendarStartDate,
                $this->calendarStartDate->clone()->addWeek()
            );
    }

    public function incrementCalendarWeek()
    {
        $this->calendarStartDate->addWeek()->addDay();
    }

    public function decrementCalendarWeek()
    {
        $this->calendarStartDate->subWeek()->subDay();
    }

    public function getWeekIsGreaterThanCurrentProperty()
    {
        return $this->calendarStartDate->gt(now());
    }

    public function render()
    {   
        return view('livewire.booking-calendar');
    }
}
