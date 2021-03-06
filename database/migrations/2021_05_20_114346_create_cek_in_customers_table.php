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
            $table->string('namaCustomer');
            $table->string('namaKaryawan');
            $table->string('tanggalCekIn');
            $table->integer('jumlahTamu');
            $table->string('tanggalCekOut');
            $table->string('deposit');
            $table->bigInteger('type_id');
            $table->string('noKamar');
            $table->timestamps();
            $table->softDeletes();
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
