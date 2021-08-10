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
              <?php $jmlproducts1 = $this->As_m->view('bisnis')->num_rows(); ?>
              <div class="inner">
                <h3><?php echo $jmlproducts1; ?></h3>
                <p>Semua Bisnis</p>
              </div>
              <div class="icon">
                <i class="fas fa-shapes"></i>
              </div>
            <a href="<?php echo base_url('aspanel/bisnis') ?>" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <?php } ?>
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
