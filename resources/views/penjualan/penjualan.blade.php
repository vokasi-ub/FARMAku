@extends('template.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
<h1>Data Penjualan Farmaku</h1>
<br>
      <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Form Search</h3>
            </div>
            <form action="/penjualan" method="GET">

            <div class="box-body">
              <div class="row">
                <div class="col-xs-5">
                  <div class="input-group">
                <div class="input-group-btn">
                  <button type="submit" class="btn btn-danger">Search</button>
                </div>
                <!-- /btn-group -->
                
                <input type="text" class="form-control" name="cari" placeholder="Cari Data">
              </div>
                </div>
              </div>
            </div>
          </form>
            <!-- /.box-body -->
          </div>

 <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Daftar Penjualan</h3>
            </div>

          <div class="box-body">
              <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-default">
                Tambah Data
              </button>
              
              <div class="modal fade" id="modal-default">

         <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Data Penjualan</h4>
              </div>

                <form class="form-horizontal" action="/inputdatapenjualan/store" method="post">
                {{ csrf_field() }}
              <div class="box-body">
              <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">ID Transaksi</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="idtransaksi"  placeholder="idtransaksi">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Tanggal Penjualan</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="tglpenjualan"  placeholder="tglpenjualan">
                  </div>
                </div>
              <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">ID Pelanggan</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="idpelanggan" placeholder="idpelanggan">
                  </div>
                </div>
              <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">ID Karyawan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="idkaryawan"  placeholder="idkaryawan">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">ID Obat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="idobat" placeholder="idobat">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Jumlah Obat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="jumlahobat" placeholder="jumlahobat">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Harga</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="harga"  placeholder="harga">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Total Harga</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="totalharga" placeholder="totalharga">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                   
                    </div>
                  </div>
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
                <th>Aksi</th>
  </tr>
                <?php $no=1; ?>
             @foreach($data_penjualan as $data_penjualan)
                 <tr>
                  <th>{{$no++ }} </th>

                  <th>{{$data_penjualan->idtransaksi}}</th>
                  <th>{{$data_penjualan->tglpenjualan}}</th>
                  <th>{{$data_penjualan->idpelanggan}}</th>
                  <th>{{$data_penjualan->idkaryawan}}</th>
                  <th>{{$data_penjualan->idobat}}</th>
                  <th>{{$data_penjualan->jumlahobat}}</th>
                  <th>{{$data_penjualan->harga}}</th>
                  <th>{{$data_penjualan->totalharga}}</th>
                     <th> 

                      <a href="/penjualanedit/edit/{{ $data_penjualan->id }}">Edit</a> ||
                     <a href="/hapuspenjualan/destroy/{{ $data_penjualan->id}}">Hapus</a></td>
                     </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          </section>
          <!-- /.box -->
        </div>
      </div>
  </div>

    <!-- /.content -->
  
    <!-- /.content -->
@endsection