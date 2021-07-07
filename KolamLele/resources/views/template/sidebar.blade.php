<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="/" class="brand-link">
    <img src="{{asset('lte/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Kolamku </span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    
    <!-- SidebarSearch Form -->

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent nav-collapse-hide-child" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="/" class="nav-link" id="side-home">
            <i class="nav-icon fas fa-home "></i>
              <p>
                Beranda
                <span class="badge badge-info right"></span>
              </p>
          </a>
        </li>
        @if ( Auth::user()->rule ==='1' )
        <li class="nav-item" id="side-kolamku">
          <a href="/kolam" class="nav-link"id="side-kolamkuu">
            <i class="nav-icon fas fa-fish"></i>
              <p>
                Kolamku
                <span class="badge badge-info right"></span>
                <i class="right fas fa-angle-left"></i>
              </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/kolam" class="nav-link" id="side-kolam">
                <i class="nav-icon fas fa-list-ul"></i>
                  <p>
                    Data Kolam
                    <span class="badge badge-info right"></span>
                  </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/kualitas" class="nav-link" id="side-kualitas">
                <i class="nav-icon far fa-chart-bar"></i>
                  <p>
                    kualitas Kolam
                    <span class="badge badge-info right"></span>
                  </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/riwayat" class="nav-link" id="side-riwayat">
                <i class="nav-icon far fa-clock"></i>  
                <p>
                    Riwayat Pemantauan
                    <span class="badge badge-info right"></span>
                  </p>
              </a>
            </li>
          </ul>
        </li>
        {{-- <li class="nav-item">
          <a href="/pakan" class="nav-link" id="side-pakan">
            <ion-icon class="nav-icon" name="cube-outline"></ion-icon>
              <p>
                Pemberian Pakan
                <span class="badge badge-info right"></span>
              </p>
          </a>
        </li> --}}
        {{-- <li class="nav-item">
          <a href="/hasil" class="nav-link" id="side-hasil">
            <i class="nav-icon fas fa-money-check-alt"></i>
              <p>
                Hasil Usahaku
                <span class="badge badge-info right"></span>
              </p>
          </a>
        </li>  --}}
        <li class="nav-item">
          <a href="/laporan" class="nav-link" id="side-laporan">
            <i class="nav-icon fas fa-print"></i>
              <p>
                Laporan Pemantauan
                <span class="badge badge-info right"></span>
              </p>
          </a>
        </li>
        @else
        <li class="nav-item">
          <a href="/user" class="nav-link" id="side-user">
            <i class="nav-icon far fa-user"></i>  
            <p>
                Data User
                <span class="badge badge-info right"></span>
              </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/alat" class="nav-link" id="side-alat">
            <i class="nav-icon fas fa-tools"></i>  
            <p>
                Data Alat
                <span class="badge badge-info right"></span>
              </p>
          </a>
        </li>
        @endif    
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
