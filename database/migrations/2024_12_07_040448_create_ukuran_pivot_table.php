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
        Schema::create('ukuran_pivot', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pakaian')->constrained('pakaian');
            $table->foreignId('id_ukuran')->constrained('ukuran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ukuran_pivot');
    }
};
