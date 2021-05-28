<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table="booking";
    protected $primaryKey="booking_id";
    protected $fillable=[
    	'coach_id',
    	'name',
    	'email',
    	'address',
        'fromDate',
        'toDate',
        'destination',
    	'number',
    	'message',
    	'status'
    ];
}
