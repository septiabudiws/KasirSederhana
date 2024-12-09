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
        Schema::create('pakaian', function (Blueprint $table) {
            $table->id();
            $table->string('token');
            $table->string('nama_pakaian');
            $table->foreignId('kategori_id')->constrained('kategori');
            $table->string('brand');
            $table->integer('harga');
            $table->integer('stok_barang');
            $table->text('deskripsi');
            $table->foreignId('gambar_id')->constrained('gambar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pakaian');
    }
};
