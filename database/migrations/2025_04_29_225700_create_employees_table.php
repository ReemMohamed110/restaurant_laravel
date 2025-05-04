<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('role',['chief','assistant','accountant']);
            $table->string('salary');
            $table->string('phone');
            $table->string('address');
            $table->date('birthdate');
            $table->enum('gender',['male','female']);
            $table->enum('status',['active','not active']);
            $table->string('nationalID');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
