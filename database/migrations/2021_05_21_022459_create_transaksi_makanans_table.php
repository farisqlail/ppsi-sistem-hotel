<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiMakanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_makanans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idMenu')->index();
            $table->foreignId('idCekin')->index();
            $table->bigInteger('harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi_makanans');
    }
}
