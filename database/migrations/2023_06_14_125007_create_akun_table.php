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
        Schema::create('akun', function (Blueprint $table) {
            $table->id();
            $table->string('namaAkun');
            $table->string('emailAkun')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('passwordAkun');
            $table->rememberToken();
            $table->timestamps();
            $table->integer('nomerHPAkun');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('akun');
    }
};
