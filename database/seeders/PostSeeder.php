<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{   use HasFactory;
    /**
     * Run the database seeds.
     */
    protected $fillable=['title','content','image','user_id'];
    public function run(): void
    {
        Post::factory()->count(20)->create();
    }
}
