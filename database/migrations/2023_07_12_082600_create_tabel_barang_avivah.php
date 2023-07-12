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
        Schema::create('t_barang_avivah', function (Blueprint $table) {
            // $table->id();
            $table->string('bagianid',10)->primary();
            $table->string('namabarang',45)->nullable();
            $table->string('satuan',45)->nullable();
            $table->string('harga',45)->nullable();
            $table->string('kategoriid',5)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_barang_avivah');
    }
};
