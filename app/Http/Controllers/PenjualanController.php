<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\penjualan;
use Illuminate\Support\Facades\DB;
class PenjualanController extends Controller
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
            $data_penjualan = \App\penjualan::where('idtransaksi','LIKE','%'.$request->cari.'%')->get();
            $data_obat = DB::table('data_obat')->get();
            $data_pelanggan = DB::table('data_pelanggan')->get();
        } else {
            $data_obat = DB::table('data_obat')->get();
            $data_pelanggan = DB::table('data_pelanggan')->get();

            $data_penjualan = DB::table('data_penjualan')
            ->join('data_obat', 'data_penjualan.idobat', '=', 'data_obat.idobat')
            ->join('data_pelanggan', 'data_penjualan.idpelanggan', '=', 'data_pelanggan.idpelanggan')
            ->select('data_penjualan.*', 'data_obat.*', 'data_pelanggan.*')
            ->get();
        }
        return view('penjualan.penjualan', compact('data_penjualan', 'data_obat', 'data_pelanggan'));
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
        DB::table('data_penjualan')->insert([
        'idtransaksi' => $request->idtransaksi,
        'tglpenjualan' => $request->tglpenjualan,
        'idpelanggan' => $request->idpelanggan,
        'idkaryawan' => $request->idkaryawan,
        'idobat' => $request->idobat,
        'jumlahobat' => $request->jumlahobat,
        'harga' => $request->harga,
        'totalharga' => $request->totalharga,
    ]);
    // alihkan halaman ke halaman pegawai
    return redirect('/penjualan');
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
        $output = 'Daftar Penjualan';
        $data_penjualan = data_penjualan::get();
        return view('show', array(
          'data_penjualan' => $output,
          'data_penjualan' => $data_penjualan
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
    $data_penjualan = DB::table('data_penjualan')->where('id',$id)->get();
    // passing data pegawai yang didapat ke view edit.blade.php
    return view('penjualan.edit',['data_penjualan' => $data_penjualan]);
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
    DB::table('data_penjualan')->where('id',$request->id)->update([
        'idtransaksi' => $request->idtransaksi,
        'tglpenjualan' => $request->tglpenjualan,
        'idpelanggan' => $request->idpelanggan,
        'idkaryawan' => $request->idkaryawan,
        'idobat' => $request->idobat,
        'jumlahobat' => $request->jumlahobat,
        'harga' => $request->harga,
        'totalharga' => $request->totalharga,
    ]);
    // alihkan halaman ke halaman pegawai
    return redirect('/penjualan');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('data_penjualan')->where('id', $id)->delete();
            return redirect('/penjualan');
    }

}
