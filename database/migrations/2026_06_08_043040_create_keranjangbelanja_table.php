<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up():
    {
        Schema::create('keranjangbelanja', function (Blueprint $table) {
            $table->id('ID')->autoIncrement();
            $table->integer('KodeBarang');
            $table->integer('Jumlah');
            $table->integer('Harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('keranjangbelanja');
    }
};
