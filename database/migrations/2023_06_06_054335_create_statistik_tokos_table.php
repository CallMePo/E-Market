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
        Schema::create('statistik_tokos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('toko_id');
            $table-> integer('JumlahKlikToko');
            $table-> integer('JumlahKlikBarang');
            $table-> integer('JumlahKlikKontakToko');
            $table-> char('BulanStatistik');
            $table-> integer('TotalKlik');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('statistik_tokos');
    }
};
