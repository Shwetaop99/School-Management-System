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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();

            // Teacher Identification
            $table->string('teacher_id')->unique();

            // Personal Information
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender')->nullable();
            $table->date('date_of_birth')->nullable();

            // Contact Information
            $table->string('email')->nullable();
            $table->string('phone');
            $table->string('alternate_phone')->nullable();
            $table->text('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();

            // Professional Information
            $table->string('qualification')->nullable();
            $table->string('subject')->nullable();
            $table->string('specialization')->nullable();
            $table->decimal('experience', 4, 1)->nullable();
            $table->string('employment_type')->nullable();

            // Joining & Status
            $table->date('joining_date')->nullable();
            $table->string('status')->default('active');

            // Profile Photo
            $table->string('profile_photo')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};