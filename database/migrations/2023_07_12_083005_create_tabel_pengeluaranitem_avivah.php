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
        Schema::create('t_pengeluaranitem_avivah', function (Blueprint $table) {
           // $table->id();
            $table->integer('id')->primary();
            $table->string('nobk',10)->nullable();
            $table->string('barangid',10)->nullable();
            $table->integer('jumlah')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_pengeluaranitem_avivah');
    }
};
