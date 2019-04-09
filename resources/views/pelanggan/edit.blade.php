@extends('template.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
<h1>Data Pelanggan</h1>
<br>

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Pelanggan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            @foreach($data_pelanggan as $p)
            <form class="form-horizontal" action="/datapelanggan/update" method="post">
               {{ csrf_field() }}
              <div class="box-body">
                  <input type="hidden" name="id" value="{{ $p->id}}"> <br/>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">ID Pelanggan</label>
                  
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="idpelanggan" value="{{ $p->idpelanggan }}" placeholder="idobat">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama Pelanggan</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="namapelanggan" value="{{ $p->namapelanggan }}" placeholder="namaobat">
                  </div>
                </div>
              <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Jenis Kelamin</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="jeniskelamin" value="{{ $p->jeniskelamin }}" placeholder="jeniskelamin">
                  </div>
                </div>
              <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat" value="{{ $p->alamat }}" placeholder="jeniskelamin">
                  </div>
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