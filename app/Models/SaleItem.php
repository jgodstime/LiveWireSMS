<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SaleItem extends Model
{
    public $incrementing = false;

    protected $fillable = ['id','sale_id','product_id','category_id','quantity','selling_price','amount_sold'];

}
