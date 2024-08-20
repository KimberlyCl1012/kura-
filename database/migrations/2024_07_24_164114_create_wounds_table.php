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
        Schema::create('wounds', function (Blueprint $table) {
            $table->id(); //'id_wound'
            $table->foreignId('health_record_id')->constrained('health_records');
            $table->foreignId('wound_phase_id')->constrained('wound_phases');
            $table->foreignId('wound_type_id')->constrained('wound_types');
            $table->foreignId('body_location_id')->constrained('body_locations');
            $table->text('note_id')->nullable()->constrained('notes');
            $table->string('woundBackground');
            $table->date('woundCreationDate');
            $table->date('woundBeginDate')->nullable();
            $table->date('woundHealDate')->nullable();
            $table->string('MESI')->nullable();
            $table->string('ITB')->nullable();
            $table->string('pulses')->nullable();
            $table->string('tunneling')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wounds');
    }
};
