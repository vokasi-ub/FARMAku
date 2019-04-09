@extends('template.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
<h1>Data Penjualan</h1>
<br>

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Data Penjualan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            @foreach($data_penjualan as $p)
            <form class="form-horizontal" action="/datapenjualan/update" method="post">
               {{ csrf_field() }}
              <div class="box-body">
                  <input type="hidden" name="id" value="{{ $p->id}}"> <br/>
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
              <div class="box-footer">
                <button type="submit" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </section>
        @endforeach

    <!-- /.content -->
  
    <!-- /.content -->
@endsection