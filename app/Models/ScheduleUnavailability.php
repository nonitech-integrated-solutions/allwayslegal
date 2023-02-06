<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScheduleUnavailability extends Model
{
    use HasFactory;

    protected $fillable = [
        'schedule_id',
        'start_time',
        'end_time',
        'comment'
    ];

    protected $casts = [
        'schedule_id' => 'integer',
        'start_time' => 'datetime',
        'end_time' => 'datetime',
        'comment' => 'string'
    ];

    public function schedule() 
    {   
        return $this->belongsTo(Schedule::class);
    }
}
