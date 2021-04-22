
<?php $this->load->view('backend/top')?>
<?php $this->load->view('backend/menu')?>



<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Update Diskon</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url()?>aspanel/products">Products</a></li>
            <li class="breadcrumb-item active">Update Diskon</li>
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
            echo form_open_multipart('aspanel/products_disc',$attributes); ?>


              <div class="card-body">
                <div class="form-group">
                  <input type="hidden" name="products_id" value="<?php echo $rows['products_id'] ?>">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="products_judul" value="<?php echo $rows['products_judul'] ?>" disabled>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group">
                        <img class="img-fluid mb-3" src="<?php echo base_url()?>bahan/foto_products/<?php echo $rows['products_gambar'] ?>" alt="Photo">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Persentase Diskon</label>
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" name="products_harga_disc" value="<?php echo $rows['products_harga_disc'] ?>">
                          <div class="input-group-append">
                            <span class="input-group-text">%</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Berakhir Pada</label>
                        <input type="date" class="form-control" name="products_disc_end" value="<?php echo $rows['products_disc_end'] ?>">
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                          <label>Hot Promo</label>
                          <select class="form-control" name="products_disc_status">
                            <option value="<?php echo $rows['products_disc_status'] ?>" selected="selected"><?php echo $rows['products_disc_status'] ?></option>
                            <?php if($rows['products_disc_status']== 'PROMO'){
                              echo"<option value='NON PROMO'>NON PROMO</option>";
                            }else{
                              echo"<option value='PROMO'>PROMO</option>";
                            }?>
                          </select>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <button type="submit" name ="submit" class="btn btn-success" title="Update Blog"><i class="fas fa-file-upload"></i> Update</button>
                <a class="btn btn-primary" title="Batal" href="<?php echo base_url()?>aspanel/products"><i class="fab fa-creative-commons-sa"></i> Cancel</a>

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
