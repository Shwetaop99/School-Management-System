<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // The subjects table already exists in the database.
        // Do not recreate or modify the existing master table here.
    }

    public function down(): void
    {
        // Do not delete the existing subjects table.
    }
};