<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    /** @use HasFactory<\Database\Factories\CategoriesFactory> */
    use HasFactory;
    public function menuItems(){
        return $this->hasMany(menuItem::class);
    }
    public function menu(){
        return $this->belongsTo(Menu::class);
    }
}
