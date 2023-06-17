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
            $table->id('idToko');
            $table->string('namaToko');
            $table->dateTime('bukaToko');
            $table->dateTime('tutupToko');
            $table->string('letakPasar');
            $table->string('lokasiPasar');
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
