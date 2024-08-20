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
        Schema::create('treatments', function (Blueprint $table) {
            $table->id(); //'id_treatment'
            $table->foreignId('diagnostic_id')->constrained('diagnostics');
            $table->foreignId('note_id')->nullable()->constrained('notes');
            $table->string('name');
            $table->text('description')->nullable();
            $table->date('beginDate');
            $table->enum('treatmentMethod', ['Desbridamiento', 'Vendajes', 'Compresión', 'Cirugía', 'Medicación', 'Otro']);
            $table->enum('treatmentResult', ['Exitoso', 'Parcialmente Exitoso', 'No Exitoso'])->nullable();
            $table->string('treatmentState')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tratments');
    }
};
