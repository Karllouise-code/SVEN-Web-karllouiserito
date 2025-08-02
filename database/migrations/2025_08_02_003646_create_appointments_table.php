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
        Schema::create('tblAppointments', function (Blueprint $table) {
            $table->id();
            $table->enum('frequency', ['recurring', 'one_time'])->default('one_time');
            $table->date('start_date');
            $table->text('days')->nullable();
            $table->text('times')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tblAppointments');
    }
};