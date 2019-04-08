<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class obat extends Model
{
    protected $table = 'data_obat';
    protected $fillabel =['id','idobat','namaobat','hargaobat','stockobat'];
    public $timestamps = true;
}