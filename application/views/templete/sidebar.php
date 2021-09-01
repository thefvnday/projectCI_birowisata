
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo base_url()?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">ADMIN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Someone Greatest!</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Admin Area
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('CPariwisata/index')?>" class="nav-link">
                  <i class="far fa-user nav-icon"></i>
                  <p>List Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('CPariwisata/dataKelas')?>" class="nav-link">
                  <i class="far fa-user nav-icon"></i>
                  <p>Data Destinasi Wisata</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('CPariwisata/datakkelas')?>" class="nav-link">
                  <i class="far fa-user nav-icon"></i>
                  <p>Data Kelas Wisata</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('CPariwisata/datapelanggan')?>" class="nav-link">
                  <i class="far fa-user nav-icon"></i>
                  <p>Data Palanggan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('CPariwisata/datapesanan')?>" class="nav-link">
                  <i class="far fa-user nav-icon"></i>
                  <p>Data Pemesanan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('CPariwisata/logout')?>" class="nav-link">
                  <i class="far fa-user nav-icon"></i>
                  <p>Logout</p>
                </a>
              </li>
            </ul>
          </li>
         
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>