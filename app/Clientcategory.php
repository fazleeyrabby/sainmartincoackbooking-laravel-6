<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientcategory extends Model
{
    protected $table="clientcategory";
    protected $primaryKey="id";
    protected $fillable=[
        'name',
    ];
}
