<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url(); ?>">
        
        <div class="sidebar-brand-text mx-3 "> Perpustakaan</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('dataBuku') ?>">
          <i class="fas fa-book-open"></i>
          <span>Data Buku</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('dataAnggota') ?>">
          <i class="fas fa-user-friends"></i>
          <span>Data Anggota</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('dataPeminjaman') ?>">
          <i class="fas fa-people-arrows"></i>
          <span>Peminjaman</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('dataPetugas') ?>">
          <i class="fas fa-users-cog"></i>
          <span>Data Petugas</span></a>
      </li>

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <H4 class="font-weight-bold"> <i class="fas fa-book-open"></i> PERPUSTAKAAN DAERAH</H4>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">


            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Noor Ihsan</span>
                <img class="img-profile rounded-circle" src="https://images.pexels.com/photos/3563630/pexels-photo-3563630.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940/60x60">
              </a>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->