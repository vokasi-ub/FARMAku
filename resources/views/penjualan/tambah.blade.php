@extends('template.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->



    <section class="content-header">
<h1>Data Obat</h1>
<br>
     
    

          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">List Data Penjualan</h3>
       
            </div>

            <div class="box-body">
                      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-info">
                Tambah Data
              </button><br><br>

          
          <div class="modal modal-info fade" id="modal-info">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modaal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Data Penjualan</h4>
              </div>
                <form class="form-horizontal" action="/inputdata/store" method="post">
                {{ csrf_field() }}
                <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">ID Transaksi</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="idtransaksi" value="{{ $p->idtransaksi }}" placeholder="idobat">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Tanggal Penjualan</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="tglpenjualan" value="{{ $p->tglpenjualan }}" placeholder="namaobat">
                  </div>
                </div>
              <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">ID Pelanggan</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="idpelanggan" value="{{ $p->idpelanggan }}" placeholder="hargaobat">
                  </div>
                </div>
              <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">ID Karyawan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="idkaryawan" value="{{ $p->idkaryawan }}" placeholder="hargaobat">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">ID Obat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="idobat" value="{{ $p->idobat }}" placeholder="hargaobat">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Jumlah Obat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="jumlahobat" value="{{ $p->jumlahobat }}" placeholder="hargaobat">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Harga</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="harga" value="{{ $p->harga }}" placeholder="hargaobat">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Total Harga</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="totalharga" value="{{ $p->totalharga }}" placeholder="hargaobat">
                  </div>
                </div>
              <!-- /.box-body -->
             
              <!-- /.box-footer -->
            
              <div class="modal-footer">
                <button type="submit" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Save</button>
              </div>
              </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
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
  </tr>
                <?php $no=1; ?>
             @foreach($data_penjualan as $data_penjualan)
                 <tr>
                  <th>{{$no++ }} </th>

                   <th>{{$data_obat->idtransaksi}}</th>
                  <th>{{$data_obat->tglpenjualan}}</th>
                  <th>{{$data_obat->idpelanggan}}</th>
                  <th>{{$data_obat->idkaryawan}}</th>
                  <th>{{$data_obat->idobat}}</th>
                  <th>{{$data_obat->jumlahobat}}</th>
                  <th>{{$data_obat->harga}}</th>
                  <th>{{$data_obat->totalharga}}</th>
                     <th> 
 
            <a href="/obatedit/edit/{{ $data_obat->id }}">Edit</a> | <a href="/hapus/destroy/{{ $data_obat->id }}">Hapus</a></td>
    </tr>
  @endforeach
  
            </table> 
            </div>
            <!-- /.box-body -->
          </div>
        </section>

    <!-- /.content -->
  
    <!-- /.content -->
@endsection



