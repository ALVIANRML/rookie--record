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
        Schema::create('payments', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name')->nullable();
            $table->text('address')->nullable();
            $table->bigInteger('total_price')->nullable();
            $table->integer('quantity')->nullable();
            $table->string('phone')->nullable();
            $table->uuid('kaset_id')->nullable();
            $table->uuid('compactdisk_id')->nullable();
            $table->enum('status',['unpaid','paid']);

            $table->timestamps();

            $table->foreign('kaset_id')
            ->references('id')
            ->on('kasets')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('compactdisk_id')
            ->references('id')
            ->on('compactdisks')
            ->onUpdate('cascade')
            ->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
