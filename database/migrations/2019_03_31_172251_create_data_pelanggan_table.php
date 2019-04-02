<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataPelangganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pelanggan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('idpelanggan',25);
            $table->string('namapelanggan',55);
            $table->string('jeniskelamin',25);
            $table->string('alamat',25);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_pelanggan');
    }
}
