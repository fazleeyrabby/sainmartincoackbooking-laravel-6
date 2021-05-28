<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ourprofile extends Model
{
    protected $table="ourprofile";
    protected $primaryKey="id";
    protected $fillable=[
        'profile',
    ];
}
