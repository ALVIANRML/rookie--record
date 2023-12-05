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
        Schema::create('compactdisks', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('artist')->nullable();
            $table->string('album')->nullable();
            $table->text('deskripsi')->nullable();
            $table->integer('harga')->nullable();
            $table->text('gambar')->nullable();
            $table->text('spotify')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compactdisk');
    }
};
