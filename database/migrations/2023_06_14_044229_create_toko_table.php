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
        Schema::create('toko', function (Blueprint $table) {
            $table->id();
            $table->string('namaToko');
            $table->timestamp('jamoperasiToko');
            $table->integer('kontakToko');
            $table->string('lokasiToko');
            $table->string('ukuranToko');
            $table->integer('hargaToko');
            $table->string('kotaToko');
            $table->binary('fotoToko');
            // $table->string('pasarToko');
            // $table->foreign('pasarToko')->references('idPasar')->on('pasar');
            $table->foreignId('pasar_id');
            $table->foreignId('akun_id');
            // $table->integer('akunToko');
            // $table->foreign('akunToko')->references('idAkun')->on('akun');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('toko');
        //
    }
};
