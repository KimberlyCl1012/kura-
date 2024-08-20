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
        Schema::create('treatment_logs', function (Blueprint $table) {
            $table->id(); // 'id_treatmentLog'
            $table->foreignId('treatment_id')->constrained('treatments');
            $table->foreignId('appointment_id')->constrained('appointments');
            $table->foreignId('note_id')->nullable()->constrained('notes');
            $table->date('treatmentDate');
            $table->text('evolution')->nullable();
            $table->string('bloodPressure')->nullable();
            $table->string('temperature')->nullable();
            $table->string('oxigenation')->nullable();
            $table->string('heartRate')->nullable();
            $table->text('medicines')->nullable();
            $table->text('laboratory')->nullable();
            $table->text('nourishment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('treatment_logs');
    }
};
