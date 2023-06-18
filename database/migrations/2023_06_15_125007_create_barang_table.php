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
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->string('namaBarang');
            $table->integer('hargaBarang');
            $table->string('deskripsiBarang');
            $table->string('stokBarang');
            $table->boolean('statusBarang');
            // $table->string('tokoBarang');
            // $table->foreign('tokoBarang')->references('idToko')->on('toko');
            $table->foreignId('toko_id');
            $table->binary('fotoBarang');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang');
    }
};
