<?php

namespace App\Models;

use App\Models\MenuItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderDetails extends Model
{
    /** @use HasFactory<\Database\Factories\OrderDetailsFactory> */
    use HasFactory;
    public function menuItems(){
        return $this->hasOne(MenuItem::class);
    }
    public function order(){
        return $this->belongsTo(Order::class);
    }
}
