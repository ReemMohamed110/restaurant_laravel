<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    protected $fillable=['name','menu_id','status'];
    public function run(): void
    {
        Categories::factory()->count(20)->create();
    }
}
