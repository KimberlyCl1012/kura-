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
        Schema::create('user_details', function (Blueprint $table) {
            $table->id(); //'id_userDetail'
            $table->foreignId('company_id')->nullable()->constrained('companies');
            $table->foreignId('site_id')->nullable()->constrained('sites');
            $table->foreignId('sex_id')->nullable()->constrained('sexes');
            $table->string('name');
            $table->string('fatherLastName');
            $table->string('motherLastName');
            $table->string('mobile');
            $table->string('contactEmail')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_details');
    }
};
