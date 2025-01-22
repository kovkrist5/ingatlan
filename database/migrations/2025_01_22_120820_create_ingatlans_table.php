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
        Schema::create('ingatlans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category')->references('id')->on('categories');
            $table->string('leiras')->nullable();
            $table->date('hirdetesDatuma')->default(now());
            $table->boolean('tehermentes');
            $table->integer('ar');
            $table->string('kepUrl')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ingatlans');
    }
};
