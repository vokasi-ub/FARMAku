@extends('template.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->



    <section class="content-header">
<h1>Data Obat</h1>
<br>
       
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
                <h4 class="modal-title">Tambah Data Obat</h4>
              </div>
                <form class="form-horizontal" action="/inputdataobat/store" method="post">
                {{ csrf_field() }}
                <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">idobat</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="idobat" placeholder="idobat">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">namaobat</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="namaobat" placeholder="namaobat">
                  </div>
                </div>
                  <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">hargaobat</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="hargaobat" placeholder="hargaobat">
                  </div>
                </div>
                  <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">stockobat</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="stockobat" placeholder="stockobat">
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
                <th>Id Obat</th>
                <th>Nama Obat</th>
                <th>Harga Obat</th>
                <th>Stock Obat</th>
  </tr>
                <?php $no=1; ?>
             @foreach($data_obat as $data_obat)
                 <tr>
                  <th>{{$no++ }} </th>

                  <th>{{$data_obat->id}}</th>
                  <th>{{$data_obat->idobat}}</th>
                  <th>{{$data_obat->namaobat}}</th>
                  <th>{{$data_obat->hargaobat}}</th>
                  <th>{{$data_obat->stockobat}}</th>
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



