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
        Schema::create('t_bagian_avivah', function (Blueprint $table) {
            $table->id();
            $table->string('bagianid',10);
            $table->string('namabagian',45)->nullable();
            $table->string('kepalabagian',45)->nullable();
            $table->string('telp',45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_bagian_avivah');
    }
};
