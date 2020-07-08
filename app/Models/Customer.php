<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    
    public $incrementing = false;

    protected $fillable = ['id','name','phone_number'];
}
