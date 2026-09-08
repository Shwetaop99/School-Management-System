<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('fee_structures')) {
            Schema::create('fee_structures', function (Blueprint $table) {
                $table->id();

                $table->unsignedBigInteger('class_id');

                $table->string('fee_type');

                $table->decimal('amount', 10, 2);

                $table->enum('frequency', [
                    'One Time',
                    'Monthly',
                    'Quarterly',
                    'Half Yearly',
                    'Yearly',
                ])->default('Yearly');

                $table->date('due_date')->nullable();

                $table->boolean('status')->default(true);

                $table->timestamps();

                $table->index('class_id');
                $table->index('fee_type');
                $table->index('status');

                $table->foreign('class_id')
                    ->references('id')
                    ->on('classes')
                    ->cascadeOnUpdate()
                    ->restrictOnDelete();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('fee_structures');
    }
};