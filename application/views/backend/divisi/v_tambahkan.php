
<?php $this->load->view('backend/top')?>
<?php $this->load->view('backend/menu')?>



<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Add Department</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url()?>aspanel/divisi">Department</a></li>
            <li class="breadcrumb-item active">Add Department</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12 col-xs-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title"></h3>
            </div>
            <!-- /.card-header -->


            <!-- form start -->
            <?php $attributes = array('class'=>'form-horizontal','role'=>'form');
            echo form_open_multipart('aspanel/divisi_tambahkan',$attributes); ?>
              <div class="card-body">
                <div class="form-group">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Department Code</label>
                        <input type="text" class="form-control" name="products_cat_meta_desk" placeholder="Kode divisi">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Department Name</label>
                        <input type="text" class="form-control" name="products_cat_judul" placeholder="Nama Divisi">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Description</label>
                        <textarea class="textarea"  name ="products_cat_desk" style="width: 100%; height: 100px;"></textarea>
                      </div>
                    </div>
                  </div>


                </div>
              </div>
              <div class="card-footer">
                <button type="submit" name ="submit" class="btn btn-success" title="Add Products"><i class="fas fa-file-upload"></i> Add</button>
                <a class="btn btn-outline-info" title="Cancel" href="<?php echo base_url()?>aspanel/divisi"><i class="fab fa-creative-commons-sa"></i> Cancel</a>

              </div>
                <?php echo form_close(); ?>


          </div>


        </div>

      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>

</div>
  <!-- /.content-wrapper -->


<?php $this->load->view('backend/bottom')?>
