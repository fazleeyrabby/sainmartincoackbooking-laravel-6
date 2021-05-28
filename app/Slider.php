<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table="slider";
    protected $primaryKey="id";
    protected $fillable=[
        'img',
        'publication_status',
    ];
}
