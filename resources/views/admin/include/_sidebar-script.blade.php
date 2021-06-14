    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/admin') }}">
            <div class="sidebar-brand-icon">
                <img src="{{ asset('assets/img/logo.png') }}" width="35px" alt="">
            </div>
            <div class="sidebar-brand-text mx-3">Varna Culture Hotel</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider mt-3">

        <div class="sidebar-heading mt-3">
            Dashboard
        </div>

        <li class="nav-item active">
            <a class="nav-link" href="{{ url('/DashboardAdmin') }}">
                <i class="fas fa-chart-line"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <div class="sidebar-heading mt-3">
            Master Data
        </div>

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="{{ url('customer') }}">
                <i class="fas fa-fw fa-id-card"></i>
                <span>Customer</span></a>
        </li>

        <li class="nav-item active">
            <a class="nav-link" href="{{ url('makanan') }}">
                <i class="fas fa-fw fa-hamburger"></i>
                <span>Menu Makanan</span></a>
        </li>

        <li class="nav-item active">
          <a class="nav-link" href="{{ url('kamar') }}">
              <i class="fas fa-fw fa-bed"></i>
              <span>Kamar</span></a>
      </li>

        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Transaksi
        </div>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#ceInOut"
                aria-expanded="true" aria-controls="ceInOut">
                <i class="fas fa-fw fa-door-open"></i>
                <span>Cek In & Cek Out</span>
            </a>
            <div id="ceInOut" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Cek In & Cek Out</h6>
                    <a class="nav-link text-dark" href="{{ url('cekIn') }}">Cek In Customer</a>
                    <a class="nav-link text-dark" href="{{ url('inHouse') }}">Customer In House</a>
                </div>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#utility"
                aria-expanded="true" aria-controls="utility">
                <i class="fas fa-fw fa-exchange-alt"></i>
                <span>Transaksi Utility</span>
            </a>
            <div id="utility" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Transaksi Utility</h6>
                    <a class="nav-link text-dark" href="{{ url('/laundry') }}">Laundry</a>
                    <a class="nav-link text-dark" href="{{ url('/') }}">Pesan Makanan</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    @stack('sidebar-scripts')
