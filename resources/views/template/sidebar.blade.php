<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          {{-- <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Forms
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/advanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Advanced Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Editors</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/validation.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Validation</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li> --}}
          {{-- <li class="nav-item">
            <a href="{{ route('admin.home')}}" class="nav-link" id="AdminHome">
              <i class="nav-icon fas fa-home"></i>
              <p>Dashboard</p>
            </a>
          </li> --}}
          {{-- @if (Auth::user()->role == 'Admin') --}}
          <li class="nav-item" id="liDashboard">
            <a href="#" class="nav-link" id="Dashboard">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link" id="Home">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link" id="AdminHome">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard Admin</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item" id="liMasterData">
            <a href="#" class="nav-link" id="MasterData">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Master Data
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link" id="DataJadwal">
                  <i class="nav-icon far fa-calendar-alt"></i>
                  <p>Data Jadwal</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link" id="DataGuru">
                  <i class="fas fa-id-card nav-icon"></i>
                  <p>Data Guru</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link" id="DataKelas">
                  <i class="fas fa-solid fa-landmark nav-icon"></i>
                  <p>Data Kelas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link" id="DataSiswa">
                  <i class="fas fa-solid fa-graduation-cap nav-icon"></i>
                  <p>Data Siswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link" id="DataMapel">
                  <i class="fas fa-book nav-icon"></i>
                  <p>Data Matapelajaran</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
        {{-- @endif --}}
        {{-- @if (Auth::user()->role == 'Guru' && Auth::user()->guru(Auth::user()->id_card)) --}}
        {{-- @if (Auth::user()->role == 'Guru') --}}
          {{-- <li class="nav-item">
            <a href="#" class="nav-link" id="Home">
              <i class="nav-icon fas fa-home"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link" id="Home">
              <i class="far fa-circle nav-icon"></i>
              <p>Dashboard</p>
            </a>
          </li> --}}
        {{-- @endif --}}
        {{-- @if (Auth::user()->role == 'Siswa' && Auth::user()->siswa(Auth::user()->no_induk)) --}}
        {{-- <li class="nav-item">
          <a href="#" class="nav-link" id="Home">
            <i class="nav-icon fas fa-home"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" id="Home">
            <i class="far fa-circle nav-icon"></i>
            <p>Siswa</p>
          </a>
        </li> --}}
        {{-- @endif --}}
        
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>