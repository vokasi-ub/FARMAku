<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index()
    {
        return view('master.app');
    }
}
