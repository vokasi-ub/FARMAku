<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
    protected $table = 'data_pelanggan';
    protected $fillabel =['id','idpelanggan','namapelanggan','jeniskelamin','alamat'];
    protected $guarded =[];
    public $timestamps = true;
}