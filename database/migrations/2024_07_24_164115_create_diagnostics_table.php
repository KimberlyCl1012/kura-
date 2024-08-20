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
        Schema::create('diagnostics', function (Blueprint $table) {
            $table->id(); // 'id_diagnostic'
            $table->foreignId('wound_id')->constrained('wounds');
            $table->foreignId('note_id')->nullable()->constrained('notes');
            $table->string('name');
            $table->date('diagnosticDate');
            $table->enum('diagnosticMethod', ['InspeccionVisual', 'Medicion', 'Imagenes', 'Otro']);
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diagnostics');
    }
};
