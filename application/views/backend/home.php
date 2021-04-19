<?php $this->load->view('backend/top')?>
<?php $this->load->view('backend/menu')?>


  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        <?php  if($this->session->level=='1'){ ?>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <?php $jmlproducts1 = $this->Panel_m->view('user')->num_rows(); ?>
              <div class="inner">
                <h3><?php echo $jmlproducts1; ?></h3>
                <p>Total Karyawan</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-stalker"></i>
              </div>
            <a href="<?php echo base_url('paneladmin/data_karyawan') ?>" class="small-box-footer">Info Lengkap <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <?php } ?>
          <!-- ./col -->
            <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                
                
                <?php 
                    if ($this->session->level=='1'){
                        $jmlproducts1 = $this->Panel_m->view('cuti')->num_rows();
                    }else{
                        $jmlproducts1 = $this->Panel_m->view_where('cuti',array('username'=>$this->session->username))->num_rows();
                ?>
                <?php }?>
          
              <div class="inner">
                <h3><?php echo $jmlproducts1; ?></h3>
                <p>Jumlah Cuti</p>
              </div>
              <div class="icon">
                <i class="far fa-calendar-alt"></i>
              </div>
            <a href="<?php echo base_url('paneladmin/cuti') ?>" class="small-box-footer">Info Lengkap <i class="fas fa-arrow-circle-right"></i></a>
            </div>

          </div>
          <!-- ./col -->
            <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <?php $jmlproducts1 = $this->Panel_m->view_where('pengumuman',array('pengumuman_stat'=>'publish'))->num_rows(); ?>
              <div class="inner">
                <h3><?php echo $jmlproducts1; ?></h3>
                <p>Pengumuman</p>
              </div>
              <div class="icon">
                <i class="fas fa-bullhorn"></i>
              </div>
            <a href="<?php echo base_url('paneladmin/pengumuman') ?>" class="small-box-footer">Info Lengkap <i class="fas fa-arrow-circle-right"></i></a>
            </div>

          </div>
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">


        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php $this->load->view('backend/bottom')?>
