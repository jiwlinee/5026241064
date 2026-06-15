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
        Schema::create('mypegawai', function (Blueprint $table) {
            $table->char('kodepegawai', 9)->primary();
            $table->string('namalengkap', 50)->nullable(false);
            $table->char('divisi', 5)->nullable();
            $table->char('departemen', 10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mypegawai');
    }
};
