<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pelanggan;
use Illuminate\Support\Facades\DB;
class PelangganController extends Controller
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
            $data_pelanggan = \App\pelanggan::where('namapelanggan','LIKE','%'.$request->cari.'%')->get();
        } else {
            $data_pelanggan = pelanggan::all();
        }
        return view('pelanggan.pelanggan', compact('data_pelanggan'));
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
        $pelanggan = pelanggan::create($request->all());
    // alihkan halaman ke halaman pegawai
    return redirect('/pelanggan');
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
        $output = 'Daftar Pelanggan';
        $data_pelanggan = data_pelanggan::get();
        return view('show', array(
          'data_pelanggan' => $output,
          'data_pelanggan' => $data_pelanggan
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
    $data_pelanggan = DB::table('data_pelanggan')->where('id',$id)->get();
    // passing data pegawai yang didapat ke view edit.blade.php
    return view('pelanggan.edit',['data_pelanggan' => $data_pelanggan]);
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
    DB::table('data_pelanggan')->where('id',$request->id)->update([
        'idpelanggan' => $request->idpelanggan,
        'namapelanggan' => $request->namapelanggan,
        'jeniskelamin' => $request->jeniskelamin,
        'alamat' => $request->alamat,
   
    ]);
    // alihkan halaman ke halaman pegawai
    return redirect('/pelanggan');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('data_pelanggan')->where('idpelanggan', $id)->delete();
            return redirect('/pelanggan');
    }

}
