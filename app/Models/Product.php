<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $incrementing = false;

    protected $fillable = [
        'id',
        'user_id',
        'category_id',
        'name',
        'amount',
        'description',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
