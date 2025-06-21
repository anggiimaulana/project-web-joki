<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('metode_pembayarans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_metode');
            $table->string('nomor_rekening')->nullable();
            $table->string('atas_nama')->nullable();
            $table->string('foto_qr')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('metode_pembayarans');
    }
};
