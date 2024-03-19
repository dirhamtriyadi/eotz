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
        Schema::create('ternak', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_ring')->unique();
            $table->string('seri_burung');
            $table->string('jenis_kelamin');
            $table->string('tanggal_netas');
            $table->string('indukan_jantan');
            $table->string('seri_indukan_jantan');
            $table->string('indukan_betina');
            $table->string('seri_indukan_betina');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ternak');
    }
};
