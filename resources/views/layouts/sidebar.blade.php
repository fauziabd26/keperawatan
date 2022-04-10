<div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="/"><h3> Sistem Informasi Laboratorium Keperawatan</h3></a>
          <a href="/"><img src="{{URL::asset('stisla/img/polindra.png')}}" alt="profile Pic" height="200" width="200">
            "SILK"</a>
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
                  <li><a class="nav-link" href="{{ route('index_barang') }}">Data Barang</a></li>
                  <li><a class="nav-link" href="{{ route('index_barang') }}">Data Barang</a></li>
                  <li><a class="nav-link" href="{{ route('index_kategori') }}">Kategori Barang</a></li>
                  <li><a class="nav-link" href="{{ route('index_barang_masuk') }}">Data Barang Masuk</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-file"></i></i> <span>Laporan</span></a>
                <ul class="dropdown-menu">
                <li class="menu-header">Pilih Menu</li>
                  <li><a class="nav-link" href="#">Laporan Barang</a></li>
                </ul>
              </li>
            </ul>
        </aside>
      </div>