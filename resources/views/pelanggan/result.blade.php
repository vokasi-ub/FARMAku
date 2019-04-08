@extends('')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
<h1>Data Pelanggan</h1>
<br>
    
@if (count($hasil))
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Data Result</h3>

       
            </div>

            <div class="box-body">
              <a href="barang"> Lihat Semua Data </a>
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                <th>id</th>
                <th>idpelanggan</th>
                <th>namapelanggan</th>
                <th>jeniskelamin</th>
                <th>alamat</th>

             @foreach($data_pelanggan as $data_pelanggan)
                 <tr>
                  <td>{{$data_pelanggan->id}}</td>
                  <td>{{$data_pelanggan->idpelanggan}}</td>
                  <td>{{$data_pelanggan->nampelanggan}}</td>
                  <td>{{$data_pelanggan->jeniskelamin}}</td>
                  <td>{{$data_pelanggan->alamat}}</td>
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