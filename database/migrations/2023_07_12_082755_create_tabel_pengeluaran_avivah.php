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
        Schema::create('t_pengeluaran_avivah', function (Blueprint $table) {
          //  $table->id();
            $table->string('nobk',10)->primary();
            $table->date('tanggal')->nullable();
            $table->date('noreff')->nullable();
            $table->string('bagianid',10)->nullable();
            $table->string('petugasid',5)->nullable();
            $table->string('keterangan',50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_pengeluaran_avivah');
    }
};
