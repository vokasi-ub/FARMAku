@extends('template.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
<h1>Data Obat</h1>
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
                <th>id</th>
                <th>idobat</th>
                <th>namaobat</th>
                <th>hargaobat</th>
                <th>stockobat</th>

             @foreach($data_obat as $data_obat)
                 <tr>
                  <td>{{$data_obat->id}}</td>
                  <td>{{$data_obat->idobat}}</td>
                  <td>{{$data_obat->namaobat}}</td>
                  <td>{{$data_obat->hargaobat}}</td>
                  <td>{{$data_obat->stockobat}}</td>
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