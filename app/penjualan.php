<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penjualan extends Model
{
    protected $table = 'data_penjualan';
    protected $fillabel =['id','idtransaksi','tglpenjualan','idpelanggan','idkaryawan','idobat','jumlahobat','harga','totalharga'];
    public $timestamps = true;
}