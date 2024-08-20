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
        Schema::create('kurators', function (Blueprint $table) {
            $table->id(); //'id_kurator'
            // $table->foreignId('patient_id')->constrained('patients');
            $table->foreignId('user_details_id')->constrained('users');
            $table->foreignId('note_id')->nullable()->constrained('notes');
            $table->string('specialty');
            $table->string('professionalId');
            $table->string('passport');
            $table->string('identification');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kurators');
    }
};
