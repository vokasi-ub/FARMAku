<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataPenjualanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_penjualan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('idtransaksi',25);
            $table->date('tglpenjualan');
            $table->string('idpelanggan',25);
            $table->string('idkaryawan',25);
            $table->string('idobat',25);
            $table->string('jumlahobat',25);
            $table->string('harga',25);
            $table->string('totalharga',25);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_penjualan');
    }
}