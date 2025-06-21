<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('unique_id')->nullable()->unique();
            $table->string('name');
            $table->string('nomor_wa');
            $table->foreignId('kategori_joki_id')->constrained('kategori_jokis')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('metode_pembayaran_id')->constrained('metode_pembayarans')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('voucher_id')->nullable()->constrained('vouchers')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('total_harga_awal');
            $table->integer('total_harga_setelah_diskon');
            $table->string('bukti_pembayaran');
            $table->date('perkiraan_selesai')->nullable();
            $table->foreignId('status_order_id')->constrained('status_orders')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
