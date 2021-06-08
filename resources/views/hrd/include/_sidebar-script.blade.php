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


        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="#">
                <i class="fas fa-fw fa-id-card"></i>
                <span>Dashboard</span></a>
        </li>

    </ul>
    <!-- End of Sidebar -->

    @stack('sidebar-scripts')
