<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pelangganmodel extends Model
{
    //
    protected $table = 'data_pelanggan';
    protected $fillabel = ['id','idpelanggan','namapelanggan','jeniskelamin','alamat'];
    public $timestamps = true;
}
