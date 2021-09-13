<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <?php $users= $this->Crud_m->view_where('user', array('username'=> $this->session->username))->row_array(); ?>
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
    </li>
  </ul>
  <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
      <a class="nav-link" href="<?php echo base_url()?>" target="_blank">
        <span>Cek Web</span>
      </a>
    </li>
    <!-- Notifications Dropdown Menu -->
    <li class="nav-item dropdown user-menu">
      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
        <img src="<?php echo base_url()?>assets/frontend/user/<?php echo $users['user_gambar'];?>" class="user-image img-circle elevation-2" alt="Foto Profil">
        <span class="d-none d-md-inline">Hai, <?php echo $users['username'];?></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <!-- User image -->
        <li class="user-header bg-primary">
          <img src="<?php echo base_url()?>assets/frontend/user/<?php echo $users['user_gambar'];?>" class="img-circle elevation-2" alt="User Image">

          <p>
            <?php echo "$users[nama]";?>
            <small>Bergabung Sejak <?php echo tgl_indo($users['user_post_tanggal']);?>.</small>
          </p>
        </li>
        <!-- Menu Body -->

        <!-- Menu Footer-->
        <li class="user-footer">
          <a href="<?php echo base_url(); ?>aspanel/profil" class="btn btn-default btn-flat">Profil</a>
          <a href="<?php echo base_url(); ?>aspanel/logout" class="btn btn-default btn-flat float-right" title="Sign Out"><i class="fas fa-sign-out-alt"></i></a>
        </li>
      </ul>
    </li>

  </ul>
</nav>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?php echo base_url('aspanel/home')?>" class="brand-link">

    <center><span class="brand-text font-weight-light">WMP Panel Admin</span></center>
  </a>

<div class="sidebar">
  <!-- Sidebar user panel (optional) -->
  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <li class="nav-item">
        <a href="<?php echo base_url(); ?>aspanel/home" class="nav-link" >
          <i class="nav-icon fas fa-th"></i>
          <p>
            Dashboard
          </p>
        </a>
      </li>
    <?php  if($this->session->level=='1' OR $this->session->level=='2'){ ?>
      <li class="nav-item">
        <a href="<?php echo base_url(); ?>aspanel/identitaswebsite" class="nav-link" >
          <i class="nav-icon fas fa-exclamation-circle"></i>
          <p>
            Informasi Website
          </p>
        </a>
      </li>
        <li class="nav-item ">
          <a href="#" class="nav-link ">
            <i class="nav-icon far fas fa-fw fa-users"></i>
            <p>
              Pengguna
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>aspanel/divisi" class="nav-link ">
                <i class="far fa-circle nav-icon"></i>
                <p>Departemen</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>aspanel/data_karyawan" class="nav-link ">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Pengguna</p>
              </a>
            </li>

          </ul>
        </li>
        <?php } ?>

        <li class="nav-item">
          <a href="<?php echo base_url(); ?>aspanel/komisaris" class="nav-link" >
            <i class="nav-icon fas fa-sitemap"></i>
            <p>
              Komisaris
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url(); ?>aspanel/direksi" class="nav-link" >
            <i class="nav-icon fas fa-sitemap"></i>
            <p>
              Direksi
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url(); ?>aspanel/slider" class="nav-link" >
            <i class="nav-icon fab fa-schlix"></i>
            <p>
              Sliders
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url(); ?>aspanel/products" class="nav-link" >
            <i class="nav-icon fab fa-schlix"></i>
            <p>
              Produk
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url(); ?>aspanel/tatakelola_kategori" class="nav-link" >
            <i class="nav-icon fab fa-schlix"></i>
            <p>
              Tata Kelola
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url(); ?>aspanel/logo" class="nav-link" >
            <i class="nav-icon fab fa-schlix"></i>
            <p>
              Logo Bisnis
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link " >
            <i class="nav-icon fab fa-buffer"></i>
            <p>
              Bisnis
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>aspanel/bisnis_kategori" class="nav-link ">
                <i class="far fa-circle nav-icon"></i>
                <p>Kategori</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>aspanel/bisnis" class="nav-link ">
                <i class="far fa-circle nav-icon"></i>
                <p>Daftar Bisnis</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item ">
          <a href="" class="nav-link">
            <i class="nav-icon fas fa-hand-holding-heart"></i>
            <p>
              Kontribusi Sosial
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>aspanel/kei" class="nav-link ">
                <i class="far fa-circle nav-icon"></i>
                <p>KEI</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>aspanel/csr" class="nav-link ">
                <i class="far fa-circle nav-icon"></i>
                <p>CSR</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item ">
          <a href="<?php echo base_url(); ?>aspanel/blogs" class="nav-link">
            <i class="nav-icon fas fa-blog"></i>
            <p>
              Artikel
            </p>
          </a>
        </li>
      <li class="nav-item ">
        <a href="<?php echo base_url(); ?>aspanel/profil" class="nav-link">
          <i class="nav-icon fas fa-cogs"></i>
          <p>
            Pengaturan
          </p>
        </a>
      </li>

    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>

    <!-- Sidebar -->

    <!-- /.sidebar -->
  </aside>
