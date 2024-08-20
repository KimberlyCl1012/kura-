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
        Schema::create('patients', function (Blueprint $table) {
            $table->id(); //'id_patient'
            $table->foreignId('user_details_id')->constrained('users');
            $table->foreignId('site_id')->nullable()->constrained('sites');
            $table->foreignId('note_id')->nullable()->constrained('notes');
            $table->string('ExternalMedicalRecNum');
            $table->date('dateOfBirth');
            $table->string('passport');
            $table->string('identification');
            $table->enum('patientState', ['Active', 'Inactive']);
            $table->string('religion')->nullable();
            $table->string('medicalInsurance')->nullable();
            $table->string('relativeName')->nullable();
            $table->enum('kinship', ['Father', 'Mother', 'Brother', 'Friend', 'Other'])->nullable();
            $table->string('relativeMobile')->nullable();
            $table->binary('consent')->nullable();
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacients');
    }
};
