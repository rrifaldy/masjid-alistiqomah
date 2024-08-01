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
        Schema::create('infaqs', function (Blueprint $table) {
            $table->id();
            $table->string('nominal');
            $table->string('nama');
            $table->string('nomor');
            $table->string('metode');
            $table->string('bukti');
            $table->string('tanggal');
            $table->string('jam');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infaqs');
    }
};
