<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EmployeeSeeder extends Seeder
{ use HasFactory;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employee::factory()->count(20)->create();
    }
}
