<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class obatmodel extends Model
{
    //
    protected $table = 'data_obat';
    protected $fillabel = ['id','idobat','namaobat','hargaobat','stockobat'];
    public $timestamps = true;
}
