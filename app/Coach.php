<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    protected $table="coach";
    protected $primaryKey="id";
    protected $fillable=[
        'name',
        'img',
    ];
}
