<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
       'hallid', 'eventdate', 'eventtype', 'fullname', 'phonenumber', 'email', 'bookingoption', 'confirmbooking'
    ];
}
