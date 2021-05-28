<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Welcomemessage extends Model
{
    protected $table="welcomemessage";
    protected $primaryKey="id";
    protected $fillable=[
        'title',
        'name',
        'description',
        'designation',
        'contact',
        'img',
        'publication_status',
    ];
}
