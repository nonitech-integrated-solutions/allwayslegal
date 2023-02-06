<?php

namespace App\Bookings\Filters;

use App\Bookings\Filter;
use Carbon\CarbonPeriod;
use App\Bookings\TimeSlotGenerator;

use Illuminate\Support\Collection;

class UnavailabilityFilter implements Filter
{   
    public function __construct(Collection $unavailabilities, $appointments)
    {
        $this->unavailabilities = $unavailabilities;
       $this->appointments = $appointments;
    }

    public function apply(TimeSlotGenerator $generator, CarbonPeriod $interval)
    {
        $interval->addFilter(function ($slot) use ($generator) {


            if ($generator->schedule->date->isToday()) {
                if ($slot->lt(now()))
                return false;
            }
            
            foreach($this->unavailabilities as $unavailability) {
        
                if (
                    $slot->between(
                        $unavailability->schedule->date->setTimeFrom(
                            $unavailability->start_time->subMinutes(
                                $generator->service->duration - $generator::INCREMENT
                            )
                        ),
                        $unavailability->schedule->date->setTimeFrom(
                            $unavailability->end_time->subMinutes(
                                $generator::INCREMENT)
                        )
                    )
                ) {

                    return false; 
                    
                }
            }

            foreach($this->appointments as $appointment) {
        
                if (
                    $slot->between(
                        $appointment->date->setTimeFrom(
                            $appointment->start_time->subMinutes(
                                $generator->service->duration
                            )
                        ),
                        $appointment->date->setTimeFrom(
                            $appointment->end_time
                        )
                    )
                ) {

                    return false; 
                    
                }
            }
            return true; 
        });

    }
}