<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\obat;
use Illuminate\Support\Facades\DB;
class ObatController extends Controller
{
    
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //mencari data
        if ($request->has('cari')) {
            $data_obat = \App\obat::where('namaobat','LIKE','%'.$request->cari.'%')->get();
        } else {
            $data_obat = obat::all();
        }
        return view('obat.obat', compact('data_obat'));
    }
    //   public function search(Request $request)
    // {
    //     $query = $request->input('cari');
    //     $hasil = barang::where('nama_barang', 'LIKE', '%' . $query . '%')->paginate(10);
    //     return view('dashboard.result', compact('hasil', 'query'));
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     // insert data ke table barang
     $obat = obat::create($request->all());
    // alihkan halaman ke halaman pegawai
    return redirect('/obat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $output = 'Daftar Obat';
        $data_obat = data_obat::get();
        return view('show', array(
          'data_obat' => $output,
          'data_obat' => $data_obat
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    $data_obat = DB::table('data_obat')->where('id',$id)->get();
    // passing data pegawai yang didapat ke view edit.blade.php
    return view('obat.edit',['data_obat' => $data_obat]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function update(Request $request)
{
    // update data pegawai
    DB::table('data_obat')->where('id',$request->id)->update([
        'idobat' => $request->idobat,
        'namaobat' => $request->namaobat,
        'hargaobat' => $request->hargaobat,
        'stockobat' => $request->stockobat,
    ]);
    // alihkan halaman ke halaman pegawai
    return redirect('/obat');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('data_obat')->where('id', $id)->delete();
            return redirect('/obat');
    }

}
