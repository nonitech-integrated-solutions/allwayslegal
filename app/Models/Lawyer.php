<?php

namespace App\Models;

use App\Models\Schedule;
use App\Models\Service;

use App\Bookings\TimeSlotGenerator;
use App\Bookings\Filters\AppointmentFilter;
use App\Bookings\Filters\UnavailabilityFilter;
use App\Bookings\Filters\SlotsPassedTodayFilter;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Lawyer extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name', 
        'last_name',      
        'phone', 'gender',
        'country','address',
        'city', 'province',
        'postal', 'languages',
        'law_firm_name',
        'law_firm_reg_no',
        'story'
    ];

    public function availableTimeSlots(Schedule $schedule, Service $service)
    {
        return $slots = (new TimeSlotGenerator($schedule, $service))
            ->applyFilters([
            
        //   new SlotsPassedTodayFilter(),
            new UnavailabilityFilter($schedule->unavailabilities, $this->appointmentsForDate($schedule->date)),
            // new AppointmentFilter($appointments)
            
            ])
            ->get();
    }

    public function appointmentsForDate(Carbon $date)
    {
        return $this->appointments()->notCancelled()->whereDate('date', $date)->get();
    }

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }

    public function areas() 
    {
        return $this->belongsToMany(Area::class);
    }

    public function services() 
    {
        return $this->belongsToMany(Service::class);
    }

    public function schedules() 
    {
        return $this->hasMany(Schedule::class);
    }

    public function user() 
    {
        return $this->belongsTo(User::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }


}
