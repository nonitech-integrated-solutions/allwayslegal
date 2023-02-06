<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Client extends Model
{   
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'address',
        'city',
        'province',
        'postal',
        'phone',
        'business',
        'position'
    ];

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }

    public function user() 
    {
        return $this->belongsTo('App\Models\User');
    }
}
