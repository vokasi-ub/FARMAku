@extends('template.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
<h1>Data Pelanggan FARMAku</h1>
<br>
      <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Form Search</h3>
            </div>
            <form action="/pelanggan" method="GET">

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
              <h3 class="box-title">Daftar Pelanggan</h3>
            </div>

            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-default">
                Tambah Data
              </button>
          <div class="modal modal-info fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Data Pelanggan</h4>
                  <div class="box box-danger">
          
              </div>
                <form class="form-horizontal" action="/inputdatapelanggan/store" method="post">
                {{ csrf_field() }}
              <div class="box-body">

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">ID Pelanggan</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="idpelanggan" placeholder="idpelanggan">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama Pelanggan</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="namapelanggan" placeholder="namapelanggan">
                  </div>
                </div>
                  <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Jenis Kelamin</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="jeniskelamin" placeholder="jeniskelamin">
                  </div>
                </div>
                  <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat" placeholder="alamat">
                  </div>
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
            <table class="table table-bordered table-striped">
              <thead>
               <tr>
                <th>No</th>
                <th>Id Pelanggan</th>
                <th>Nama Pelanggan</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Aksi</th>
  </tr>
                <?php $no=1; ?>
             @foreach($data_pelanggan as $data_pelanggan)
                 <tr>
                  <th>{{$no++ }} </th>

                  <th>{{$data_pelanggan->idpelanggan}}</th>
                  <th>{{$data_pelanggan->namapelanggan}}</th>
                  <th>{{$data_pelanggan->jeniskelamin}}</th>
                  <th>{{$data_pelanggan->alamat}}</th>
                     <th> 

                     
                      <a href="/pelangganedit/edit/{{ $data_pelanggan->id }}">Edit</a> ||
                     <a href="/hapuspelanggan/destroy/{{ $data_pelanggan->idpelanggan }}">Hapus</a></td>
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