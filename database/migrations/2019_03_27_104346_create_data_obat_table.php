<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataObatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_obat', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('idobat',25);
            $table->string('namaobat',55);
            $table->string('hargaobat',25);
            $table->string('stockobat',25);
            $table->string('idjenisobat',25);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_obat');
    }
}
