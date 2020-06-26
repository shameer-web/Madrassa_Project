<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //

    protected $fillable = [



     	   'transaction_id',
            'transaction_type',
            'student_id',
            'order_id',
            'transaction_amount',
            'transaction_status',
            

     ];
}
