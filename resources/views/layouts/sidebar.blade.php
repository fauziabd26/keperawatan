<div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="/"><h3> Sistem Informasi Keperawatan</h3></a>
          <a href="/"><img src="{{URL::asset('stisla/img/polindra.png')}}" alt="profile Pic" height="200" width="200">
            SIPER</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
              <li class="nav-item dropdown">
                <a href="/"><i class="fas fa-home"></i><span>Dashboard</span></a>
              </li>
              <li class="menu-header">Pilih Menu</li>
              <li class="nav-item dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user"></i> <span>Data Pengguna</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="mahasiswa">Mahasiswa</a></li>
                  <li><a class="nav-link" href="dosen">Dosen</a></li> 
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-folder"></i></i> <span>Data Master</span></a>
                <ul class="dropdown-menu">
                <li class="menu-header">Pilih Menu</li>
                  <li><a class="nav-link" href="barang">Data Barang</a></li>
                  <li><a class="nav-link" href="kategori">Kategori Barang</a></li>
                  <li><a class="nav-link" href="satuan">Satuan Barang</a></li>
                </ul>
              </li>
			  <li class="nav-item dropdown">
                <a href="{{url('/Peminjaman')}}" ><i class="fas fa-address-book"></i> <span>Data Peminjaman</span></a>
              </li>
			  <li class="nav-item dropdown">
                <a href="{{url('/Pengembalian')}}" ><i class="fas fa-address-book"></i> <span>Data Pengembalian</span></a>
              </li>
			  <li class="nav-item dropdown">
                <a href="{{url('/Aproval')}}" ><i class="fas fa-address-book"></i> <span>Data Aproval</span></a>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-file"></i></i> <span>Laporan</span></a>
                <ul class="dropdown-menu">
                <li class="menu-header">Pilih Menu</li>
                  <li><a class="nav-link" href="layout-default.html">Laporan Barang</a></li>
                </ul>
              </li>
            </ul>
        </aside>
      </div>