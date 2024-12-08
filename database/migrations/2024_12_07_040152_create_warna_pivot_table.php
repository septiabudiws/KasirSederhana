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
        Schema::create('warna_pivot', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pakaian')->constrained('pakaian');
            $table->foreignId('id_warna')->constrained('warna');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('warna_pivot');
    }
};
