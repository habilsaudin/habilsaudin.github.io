        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon ">
                    <i class="fas fa-school"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Sibane</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url();  ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Data
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('nelayan');  ?>" <i class="fas fa-fw fa-table"></i>
                    <span>Data Nelayan</span>
                </a>
            </li>



            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('bantuan'); ?>" <i class="fas fa-fw fa-table"></i>
                    <span>Data Bantuan</span>
                </a>

            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('parameter'); ?>" <i class="fas fa-fw fa-table"></i>
                    <span>Data Parameter</span>
                </a>

            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" <i class="fas fa-fw fa-table"></i>
                    <span>Data Pengaduan</span>
                </a>

            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" <i class="fas fa-fw fa-table"></i>
                    <span>Data User</span>
                </a>

            </li>


            <li class="nav-item">
                <a class="nav-link collapsed" href="#" <i class="fas fa-fw fa-table"></i>
                    <span>Laporan</span>
                </a>

            </li>




            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->