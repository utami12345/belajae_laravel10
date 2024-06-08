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
        Schema::create('telepon', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_telepon'); // Adding nomor_telepon column
            $table->unsignedBigInteger('pengguna_id'); // Adding pengguna_id column
            $table->timestamps();

            // Adding a foreign key constraint (if pengguna table exists and you want to enforce referential integrity)
            $table->foreign('pengguna_id')->references('id')->on('pengguna')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('telepon');
    }
};
