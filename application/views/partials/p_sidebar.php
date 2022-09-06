<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-icon">
            <i class="fab fa-korvue" style="color:red"></i>
        </div>
        <div class="sidebar-brand-text mx-1 text-danger">KSU Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
        ADMIN KOPERASI KSU
    </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>admin/index">
            <i class="fas fa-fw fa-home"></i>
            <span>Dashboard</span></a>
    </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                    aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-newspaper"></i>
                    <span>Post</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?php echo base_url() ?>berita/c_berita">Berita</a>
                    </div>
                </div>
            </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->