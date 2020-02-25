<?php

namespace App;
use App\EventType;

use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    protected $fillable = [
        'name', 'location', 'halltype', 'capacity', 'amenities', 'description', 'price', 'address', 'image', 'vendor'
    ];

    /* function eventtype() {
        return $this->hasMany('App\EventType', '');
    } */
}
