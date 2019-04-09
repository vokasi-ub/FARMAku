    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Apotek Online Terlengkap</p>
          <a href=""><i class="fa fa-circle text-success"></i></a>
        </div>
      </div>
     
     
          
           <a href="obat">
            <i class="fa fa-dashboard"></i> <span>Data Obat</span>
            <br>
            <br>
          </a>
           <a href="penjualan">
            <i class="fa fa-dashboard"></i> <span>Data Penjualan</span>
            <br>
            <br>
          </a>
           <a href="pelanggan">
            <i class="fa fa-dashboard"></i> <span>Data Pelanggan</span>
          </a>
          <br>
          <br>
        
          <i class="fa fa-logout"></i> <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="mdi-hardware-keyboard-tab"></i>{{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
    </section>
    <!-- /.sidebar -->
