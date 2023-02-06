<?php

namespace App\Models;

use App\Models\Lawyer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function lawyer() {
        return $this->belongsTo(Lawyer::class, 'user_id','id');
    }
}
