<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('timetables')) {
            Schema::create('timetables', function (Blueprint $table) {
                $table->id();

                // Existing master tables
                $table->unsignedBigInteger('class_id');
                $table->unsignedBigInteger('section_id');
                $table->unsignedBigInteger('subject_id');
                $table->unsignedBigInteger('teacher_id')->nullable();

                // Timetable information
                $table->string('academic_year', 20);

                $table->enum('day', [
                    'Monday',
                    'Tuesday',
                    'Wednesday',
                    'Thursday',
                    'Friday',
                    'Saturday',
                ]);

                $table->unsignedTinyInteger('period');

                $table->time('start_time');
                $table->time('end_time');

                $table->string('room', 100)->nullable();

                $table->enum('type', [
                    'period',
                    'break',
                    'lunch',
                ])->default('period');

                $table->boolean('status')->default(true);

                $table->timestamps();

                // Indexes for faster timetable queries
                $table->index('class_id');
                $table->index('section_id');
                $table->index('subject_id');
                $table->index('teacher_id');
                $table->index('academic_year');
                $table->index(['class_id', 'section_id', 'academic_year']);
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('timetables');
    }
};