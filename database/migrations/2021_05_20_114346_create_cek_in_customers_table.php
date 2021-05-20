<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCekInCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cek_in_customers', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('idCustomer');
            $table->bigInteger('noTelp');
            $table->string('idKaryawan');
            $table->bigInteger('deposit');
            $table->string('jenisPembayaran');
            $table->date('tglCekIn');
            $table->date('tglCekOut');
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
        Schema::dropIfExists('cek_in_customers');
    }
}
