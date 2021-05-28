<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientslider extends Model
{
    protected $table="clientslider";
    protected $primaryKey="id";
    protected $fillable=[
        'img',
    ];
}
