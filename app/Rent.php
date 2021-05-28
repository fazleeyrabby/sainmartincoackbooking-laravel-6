<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    protected $table="rent";
    protected $primaryKey="id";
    protected $fillable=[
        'title',
        'img',
        'publication_status',
    ];
}
