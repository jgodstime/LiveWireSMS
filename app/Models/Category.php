<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    
    public $incrementing = false;


    protected $fillable = [
        'id',
        'user_id',
        'name',
    ];
}
