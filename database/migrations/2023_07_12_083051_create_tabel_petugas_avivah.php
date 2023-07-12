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
        Schema::create('t_petugas_avivah', function (Blueprint $table) {
           // $table->id();
            $table->integer('petugasid')->primary();
            $table->string('namapetugas',35)->nullable();
            $table->string('alamat',45)->nullable();
            $table->string('handphone',15)->nullable();
            $table->string('password',10)->nullable();
            $table->string('level',20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_petugas_avivah');
    }
};
