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
        Schema::create('wound_types', function (Blueprint $table) {
            $table->id(); //'id_woundType'
            $table->string('name');
            $table->text('description')->nullable();
            $table->enum('woundSubType', ['Quirúrgico', 'Linfovascular', 'Trauma', 'Otro'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wound_types');
    }
};
