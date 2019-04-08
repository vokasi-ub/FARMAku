@extends('template.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
<h1>Data Obat</h1>
<br>
      <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Form Search</h3>
            </div>
            <form action="/obat" method="GET">

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
                <h4 class="modal-title">Obat</h4>
              </div>
            <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Daftar Obat</h3>
            </div>

                <form class="form-horizontal" action="/inputdataobat/store" method="post">
                {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Id Obat</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="idobat" placeholder="idobat">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama Obat</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="namaobat" placeholder="namaobat">
                  </div>
                </div>
                  <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Harga Obat</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="hargaobat" placeholder="hargaobat">
                  </div>
                </div>
                  <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Stock Obat</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="stockobat" placeholder="stockobat">
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
                <th>Id Obat</th>
                <th>Nama Obat</th>
                <th>Harga Obat</th>
                <th>Stock Obat</th>
  </tr>
                <?php $no=1; ?>
             @foreach($data_obat as $data_obat)
                 <tr>
                  <th>{{$no++ }} </th>

                  <th>{{$data_obat->idobat}}</th>
                  <th>{{$data_obat->namaobat}}</th>
                  <th>{{$data_obat->hargaobat}}</th>
                  <th>{{$data_obat->stockobat}}</th>
                     <th> 

                      <a href="/obatedit/edit/{{ $data_obat->id }}">Edit</a>
                     <a href="/hapusobat/destroy/{{ $data_obat->id}}">Hapus</a></td>
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