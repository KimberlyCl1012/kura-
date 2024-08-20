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
        Schema::create('health_records', function (Blueprint $table) {
            $table->id(); //'id_healthRecord'
            $table->foreignId('patient_id')->constrained('patients');
            $table->text('note_id')->nullable()->constrained('notes');
            $table->string('recordType')->nullable();
            $table->text('description')->nullable();
            $table->text('pathologicalBackground')->nullable();
            $table->text('medicalBackground')->nullable();
            $table->text('laboratoryBackground')->nullable();
            $table->text('nourishmentBackground')->nullable();
            $table->string('healthInstitution')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('health_records');
    }
};
