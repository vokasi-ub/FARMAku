@extends('template.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->



    <section class="content-header">
<h1>Data Pelanggan</h1>
<br>
     
  

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
                <h4 class="modal-title">Tambah Data Pelanggan</h4>
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
                <th>Id</th>
                <th>Id Pelanggan</th>
                <th>Nama Pelanggan</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
  </tr>
                <?php $no=1; ?>
             @foreach($data_pelanggan as $data_pelanggan)
                 <tr>
                  <th>{{$no++ }} </th>

                  <th>{{$data_pelanggan->id}}</th>
                  <th>{{$data_pelanggan->idpelanggan}}</th>
                  <th>{{$data_pelanggan->namapelanggan}}</th>
                  <th>{{$data_pelanggan->jeniskelamin}}</th>
                  <th>{{$data_pelanggan->alamat}}</th>
                     <th> 
 
            <a href="/pelangganedit/edit/{{ $data_pelanggan->id }}">Edit</a> | <a href="/hapuspelanggan/destroy/{{ $data_pelanggan->id }}">Hapus</a></td>
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



