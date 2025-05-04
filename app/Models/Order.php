<?php

namespace App\Models;

use App\Models\OrderDetails;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    /** @use HasFactory<\Database\Factories\OrderFactory> */
    use HasFactory;
    public function orderDetails(){
        return $this->hasMany(OrderDetails::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
