<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    /** @use HasFactory<\Database\Factories\FeedbackFactory> */
    use HasFactory;
    public function menuItem(){
        return $this->belongsTo(MenuItem::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
