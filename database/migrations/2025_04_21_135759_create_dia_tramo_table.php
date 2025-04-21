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
        Schema::create('dia_tramo', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dia_id')->constrained();
            $table->foreignId('tramo_id')->constrained();
            $table->unique(['dia_id', 'tramo_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dia_tramo');
    }
};
