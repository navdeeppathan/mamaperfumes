<?php

namespace App\Models;
use App\Models\Order;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'order_id',
        'user_id',
        'amount',
        'method',
        'status',
        'account_name',
        'cheque_number',
        'payment_screenshot',
        'transaction_id'
    ];

     public function order()
    {
        return $this->belongsTo(Order::class);
    }
}