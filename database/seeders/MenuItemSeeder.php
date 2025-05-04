<?php

namespace Database\Seeders;

use App\Models\MenuItem;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MenuItemSeeder extends Seeder
{use HasFactory;
    /**
     * Run the database seeds.
     */
    protected $fillable=['name','description','image','status','price','category_id'];
    public function run(): void
    {
        MenuItem::factory()->count(20)->create();
    }
}
