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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id(); // 'id_appointment'
            $table->foreignId('site_id')->constrained('sites');
            $table->foreignId('health_record_id')->constrained('health_records');
            $table->foreignId('kurator_id')->constrained('kurators');
            $table->foreignId('note_id')->nullable()->constrained('notes');
            $table->date('FechaInicioVisita');
            $table->date('FechaFinVisita')->nullable();
            $table->enum('TipoVisita', ['Programada', 'Urgencia', 'Seguimiento']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
