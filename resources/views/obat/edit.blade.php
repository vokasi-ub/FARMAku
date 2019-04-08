@extends('template.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
<h1>Data Obat</h1>
<br>

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Data Obat</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            @foreach($data_obat as $p)
            <form class="form-horizontal" action="/dataobat/update" method="post">
               {{ csrf_field() }}
              <div class="box-body">
                  <input type="hidden" name="id" value="{{ $p->id}}"> <br/>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">ID Obat</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="idobat" value="{{ $p->idobat }}" placeholder="idobat">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama Obat</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="namaobat" value="{{ $p->namaobat }}" placeholder="namaobat">
                  </div>
                </div>
              <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Harga Obat</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="hargaobat" value="{{ $p->hargaobat }}" placeholder="hargaobat">
                  </div>
                </div>
              <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Stock Obat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="stockobat" value="{{ $p->stockobat }}" placeholder="hargaobat">
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