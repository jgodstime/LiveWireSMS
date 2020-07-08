<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public $incrementing = false;

    protected $fillable = ['id','method','invoice_number','receipt_number','additional_fee','additional_fee_description','amount_payable','amount_paid','balance','status'];

}
