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
            $table->foreignId('idCustomer')->index();
            $table->foreignId('idKaryawan')->index();
            $table->foreignId('idKamar')->index();
            $table->bigInteger('deposit');
            $table->string('jenisPembayaran');
            $table->string('status')->index();
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
