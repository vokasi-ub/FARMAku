@extends('template.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
<h1>Data Penjualan</h1>
<br>
     
    
@if (count($hasil))
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Data Result</h3>

       
            </div>

            <div class="box-body">
              <a href="barang"> Lihat Semua Data</a>
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                <th>No</th>
                <th>ID Transaksi</th>
                <th>Tanggal Penjualan</th>
                <th>ID Pelanggan</th>
                <th>ID Karyawan</th>
                <th>ID Obat</th>
                <th>Jumlah Obat</th>
                <th>Harga</th>
                <th>Total Harga</th>

             @foreach($data_penjualan as $data_penjualan)
                 <tr>
                  <td>{{$data_obat->id}}</td>
                  <td>{{$data_obat->idtransaksi}}</td>
                  <td>{{$data_obat->tglpenjualan}}</td>
                  <td>{{$data_obat->idpelanggan}}</td>
                  <td>{{$data_obat->idkaryawan}}</td>
                  <td>{{$data_obat->idobat}}</td>
                  <td>{{$data_obat->jumlahobat}}</td>
                  <td>{{$data_obat->harga}}</td>
                  <td>{{$data_obat->totalharga}}</td>


                     <td><a href="">Lihat</a> | <a href="">Edit</a> | <a href="">Hapus</a></td>
    </tr>
                   @endforeach
            </tbody>
            </table> 
            </div>
            <!-- /.box-body -->
          </div>
        </section>

    <!-- /.content -->
  @else
   <div class="card-panel red darken-3 white-text">Oops.. Data Tidak Ditemukan</div>
@endif
    <!-- /.content -->
@endsection