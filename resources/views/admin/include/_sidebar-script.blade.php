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
        <hr class="sidebar-divider my-0">

        <div class="sidebar-heading mt-3">
            Master Data
        </div>

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="{{ url('customer') }}">
                <i class="fas fa-fw fa-id-card"></i>
                <span>Data Customer</span></a>
        </li>

        <li class="nav-item active">
            <a class="nav-link" href="{{ url('makanan') }}">
                <i class="fas fa-fw fa-hamburger"></i>
                <span>Menu Makanan</span></a>
        </li>

        <li class="nav-item active">
          <a class="nav-link" href="{{ url('kamar') }}">
              <i class="fas fa-fw fa-bed"></i>
              <span>Data Kamar</span></a>
      </li>

        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Transaksi
        </div>

        <li class="nav-item active">
            <a class="nav-link" href="">
                <i class="fas fa-fw fa-users"></i>
                <span>Cek in Customer</span></a>
        </li>

        <li class="nav-item active">
            <a class="nav-link" href="">
                <i class="fas fa-fw fa-utensils"></i>
                <span>Pesan Makanan</span></a>
        </li>

        <li class="nav-item active">
            <a class="nav-link" href="">
                <i class="fas fa-fw fa-door-open"></i>
                <span>Cek out Customer</span></a>
        </li>

        <li class="nav-item active">
            <a class="nav-link" href="">
                <i class="fas fa-fw fa-camera-retro"></i>
                <span>Laundry</span></a>
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
